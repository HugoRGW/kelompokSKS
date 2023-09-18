@extends('layouts.template')

@section('admin')
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Kategori</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <div class="add_button ms-2 mb-3">
                                <a href="{{ route('kategori.create') }}" class="btn btn-success">Tambah+</a>
                                <div class="my-3">
                                    <form action="" method="get">
                                        <div class="input-group mb-3 col-12 col-sm-8 col-md-6">
                                            <input type="text" class="form-control" name="keyword"
                                                placeholder="Cari Data">
                                            <button class="input-group-text btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Ekskul</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $index => $row)
                                    <tr>
                                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                                        <td>{{ $row->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            showing
                            {{ $data->firstItem() }}
                            to
                            {{ $data->lastItem() }}
                            of
                            {{ $data->total() }}
                            entries
                        </div>
                        <div class="pull-right">
                            {{ $data->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
