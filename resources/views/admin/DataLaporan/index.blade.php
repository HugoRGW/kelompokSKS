@extends('layouts.template')

@section('admin')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left mt-2"><strong>Data Laporan</strong></div>
                        <div class="float-right">
                            <form action="{{ route('report-data') }}" method="get">
                                <button class="btn btn-primary">Refresh &nbsp<i class="ti-reload"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-1">
                            <div class="form-group d-flex align-items-center">
                                <form action="{{ route('filter-data') }}" method="get" class="d-flex">
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
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($message))
                                    <tr>
                                        <td colspan="4">{{ $message }}</td>
                                    </tr>
                                @elseif($datas->isEmpty())
                                    <tr>
                                        <td colspan="4">Data tidak ditemukan</td>
                                    </tr>
                                @else
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->message }}</td>
                                            <td>
                                                <form action="{{ route('delete-data', $data->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between">
                            <div class="mt-4">
                                @if ($datas->total() == 0)
                                    Showing 0 entries
                                @else
                                    Showing {{ $datas->firstItem() }} to {{ $datas->lastItem() }} of
                                    {{ $datas->total() }} entries
                                @endif
                            </div>
                            <div class="ml-auto mt-3">
                                {{ $datas->withQueryString()->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
@endsection
