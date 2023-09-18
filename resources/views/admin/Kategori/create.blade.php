@extends('layouts.template')

@section('admin')
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Tambah Ekskul</h4>
                    </div>
                    <div class="add_button ms-2 mb-3">
                    </div>
                    <div class="card-body--">
                        <form class="px-4" action="{{ route('kategori.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Ekskul</label>
                                <input type="text" name="kategori" value="{{ old('kategori') }}"
                                    class="form-control @error('kategori') is-invalid @enderror">
                                @error('kategori')
                                    {{ $message }}
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
