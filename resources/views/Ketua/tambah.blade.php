@extends('layouts.ketua')

@section('content')
<style>
    #submitBtn {
        background-color: blue;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
    }

    #submitBtn[disabled] {
        background-color: red;
        cursor: not-allowed;
    }

</style>
  <div class="content">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title"> </h4>
                    </div>
                    <div class="add_button ms-2 mb-3">
                    </div>
                    <div class="card-body--">
                        <form class="px-4" action="{{Route('insert.postingan')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-2 w-50">
                                    <h3>Judul:</h3>
                                    <input  style="width:100%"type="text" name="judul" value="{{old('judul')}}" class="form-control @error('judul')
                                    is-invalid
                                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('judul')
                                    {{$message}}
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <h3>Thumbnail:</h3>
                                    <input type="file" name="thumbnail" class="form-control @error('thumbnail')
                                    is-invalid
                                @enderror" id="exampleInputEmail1" value="{{old('thumbnail')}}" aria-describedby="emailHelp">@error('thumbnail')
                                    {{$message}}
                                    @enderror

                                </div>

                               <div class="col-md-6 mb-3 w-50">
    <h5>Deskripsi:</h5>
    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleInputEmail1" >{{ old('deskripsi') }}</textarea>
    @error('deskripsi')
    {{$message}}
    @enderror
</div>

                                {{-- <div class="col-md-6 mb-3 w-50">
                                    <h5>Deskripsi:</h5>
                                    <textarea name="deskripsi" class="form-control @error('deskripsi')
                                    is-invalid
                                @enderror" id="exampleInputEmail1" value="{{old('deskripsi')}}" aria-describedby="emailHelp">@error('deskripsi')
                                {{$message}}
                                @enderror</textarea>
                                </div> --}}
                               <div class="col-md-6 mb-3 w-50">
    <h5>Kategori:</h5>
    <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori_id" aria-label="Default select example">
        <option value="">Pilih Kategori</option>
        @foreach ($dtkategori as $data)
        <option value="{{ $data->id }}" {{ old('kategori_id') == $data->id ? 'selected' : '' }}>{{ $data->nama }}</option>
        @endforeach
    </select>
    @if ($errors->has('kategori_id'))
        <div class="invalid-feedback">
            {{ $errors->first('kategori_id') }}
        </div>
    @endif
</div>



                                <div class="mb-3">
                                    <h3>Konten:</h3>
                                    <textarea name="konten" id="summernote" class="form-control @error('konten')
                                    is-invalid
                                @enderror" id="exampleInputEmail1" value="{{old('konten')}}">{{ old('konten') }}
                                   </textarea>
                                   @error('konten')
                                {{$message}}
                                  @enderror
                                </div>
                                <div class="mb-3">

                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" name="agree" id="termsCheck">
                                    <label for="agree">
                                        Saya menyetujui
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Syarat dan Ketentuan</button>
                                    </label>

                                    @if($errors->has('agree'))
                                    <div class="invalid-feedback">{{ $errors->first('agree') }}</div>
                                    @endif
                                </div>

                            </div>

                            <!-- Modal -->

                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Syarat & Ketentuan Pengguna KulinerKu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <br>
                                            <h5 class="card-title">Penggunaan KulinerKu :6</h5>
                                            @foreach ( $termsAndConditions as $data )
                                                 <p class="card-text">{!! $data->isi !!}</p>
                                            @endforeach
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="mb-2" type="submit" id="submitBtn" disabled>Posting</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
@endsection