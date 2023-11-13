@extends('layouts.template')

@section('admin')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Tambah User</strong>
                    </div>
                    <div class="card-body card-block">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                                @foreach ($errors->all() as $error)
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Alert !</strong> {{ $error }}
                                @endforeach
                            </div>
                        @endif
                        <form action="{{ route('tambah-user.create') }}#user" method="POST" class="">
                            @csrf

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-user"></i></div>
                                    <input type="text" id="username" name="name" placeholder="Name"
                                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <input type="email" id="email" name="email" placeholder="Email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-id-badge"></i></div>
                                    <select name="role" id="role"
                                        class="form-control @error('role') is-invalid @enderror">
                                        <option value="0" @if (old('role') == 0) selected @endif>Select Role
                                        </option>
                                        <option value="1" @if (old('role') == 1) selected @endif>Siswa
                                        </option>
                                        <option value="2" @if (old('role') == 2) selected @endif>Operator
                                        </option>
                                        <option value="3" @if (old('role') == 3) selected @endif>Admin
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                                    <input type="password" id="password" name="password" placeholder="Password"
                                        class="form-control @error('password') is-invalid @enderror" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        placeholder="Confirm Password"
                                        class="form-control @error('password') is-invalid @enderror" required>
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
