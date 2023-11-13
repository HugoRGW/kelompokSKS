@extends('layouts.template')

@section('admin')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left mt-2"><strong>Data User</strong></div>
                        <div class="float-right">
                            <form action="{{ route('data-user') }}" method="get">
                                <button class="btn btn-primary">Refresh &nbsp<i class="ti-reload"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-1">
                            <div class="form-group d-flex align-items-center">
                                <form action="{{ route('filter-user') }}" method="get" class="d-flex">
                                    <input type="text" class="form-control" name="search" placeholder="Cari...">
                                    <button type="submit" class="btn btn-primary ti-search"></button>
                                </form>
                            </div>
                        </div>

                        <table class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($message))
                                    <tr>
                                        <td colspan="4">{{ $message }}</td>
                                    </tr>
                                @elseif($users->isEmpty())
                                    <tr>
                                        <td colspan="4">Data tidak ditemukan</td>
                                    </tr>
                                @else
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->role_id == 1)
                                                    Siswa
                                                @elseif($user->role_id == 2)
                                                    Operator
                                                @else
                                                    Admin
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-primary editUserBtn" data-toggle="modal"
                                                    data-target="#editUserModal{{ $user->id }}"
                                                    data-user-id="{{ $user->id }}" data-name="{{ $user->name }}"
                                                    data-email="{{ $user->email }}"
                                                    data-role="{{ $user->role_id }}">Edit</button>
                                                <form action="{{ route('delete-user', $user->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <!-- Edit User Modal -->
                                        <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="editUserModalLabel{{ $user->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header d-flex justify-content-between">
                                                        <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="editUserForm{{ $user->id }}"
                                                            action="{{ route('update-user', $user->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="form-group">
                                                                <label for="editName">Name</label>
                                                                <input type="text" id="editName{{ $user->id }}"
                                                                    name="name" class="form-control"
                                                                    value="{{ $user->name }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="editEmail">Email</label>
                                                                <input type="email" id="editEmail{{ $user->id }}"
                                                                    name="email" class="form-control"
                                                                    value="{{ $user->email }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="editRole">Select Role</label>
                                                                <select id="editRole{{ $user->id }}" name="role"
                                                                    class="form-control">
                                                                    <option value="1"
                                                                        @if ($user->role_id == 1) selected @endif>
                                                                        Siswa</option>
                                                                    <option value="2"
                                                                        @if ($user->role_id == 2) selected @endif>
                                                                        Operator</option>
                                                                    <option value="3"
                                                                        @if ($user->role_id == 3) selected @endif>
                                                                        Admin</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="editPassword">New Password
                                                                    (Optional)
                                                                </label>
                                                                <input type="password" id="editPassword" name="password"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="editPasswordConfirmation">Confirm New
                                                                    Password (Optional)</label>
                                                                <input type="password" id="editPasswordConfirmation"
                                                                    name="password_confirmation" class="form-control">
                                                            </div>

                                                            <button type="submit" class="btn btn-success">Simpan
                                                                Perubahan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between">
                            <div class="mt-4">
                                @if ($users->total() == 0)
                                    Showing 0 entries
                                @else
                                    Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of
                                    {{ $users->total() }} entries
                                @endif
                            </div>
                            <div class="ml-auto mt-3">
                                {{ $users->withQueryString()->fragment('user')->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.editUserBtn').click(function() {
                var userId = $(this).data('user-id');
                var name = $(this).data('name');
                var email = $(this).data('email');
                var role = $(this).data('role');

                $('#editUserForm' + userId).attr('action', '/update-user/' + userId);
                $('#editName' + userId).val(name);
                $('#editEmail' + userId).val(email);
                $('#editRole' + userId).val(role);

                $('#editUserModal' + userId).modal('show');
            });

            $('#editUserForm').submit(function() {
                $('#editUserModal').modal('hide');
            });
        });
    </script>
@endsection
