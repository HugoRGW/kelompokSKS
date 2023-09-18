@extends('layouts.template')

@section('admin')
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">DataAdmin</h4>
                    </div>
                    <div class="add_button ms-2 mb-3">
                    </div>
                    <div class="card-body--">
                        <form class="px-4" action="{{ route('email.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">email</label>
                                <input type="text" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputphone" class="form-label">No.telp</label>
                                <input type="text" name="phone" value="{{ old('phone') }}"
                                    class="form-control @error('phone') is-invalid @enderror">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputalamat" class="form-label">alamat</label>
                                <input type="text" name="alamat" value="{{ old('alamat') }}"
                                    class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
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
