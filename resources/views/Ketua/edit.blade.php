@extends('layouts.ketua')
@section('content')

<div class="content">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    </div>
                    <div class="add_button ms-2 mb-3">
                    </div>
                    <div class="card-body--">
                        <form class="px-4" action="/updt/{{$data->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row">

                            <div class="mb-3">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            </div>

                            <div class="mb-3">
                                <input type="hidden" name="nama" value="{{ auth()->user()->name }}">
                            </div>

                             <div class="mb-3">
                                <input type="hidden" name="kategori_id" value="{{ auth()->user()->id}}">
                            </div>

                            <div class="col-md-6 mb-2 w-50">
                                <h3>Judul:</h3>
                                <input type="text" name="judul" value="{{ $data ->judul}}" class="form-control @error('judul')
                                    is-invalid
                                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('judul')
                                {{$message}}
                                @enderror
                            </div>

                             <div class="col-md-6 mb-2 w-50">
                                <h3>Thumbnail:</h3>
                                <input type="file" name="thumbnail"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data ->thumbnail }}">
                                <img src="{{ asset('thumbnail/'.$data->thumbnail) }}" alt="" style="width: 130px;">
                            </div>

                             {{-- <div class="col-md-6 mb-3 w-50">
                                <h5>Deskripsi:</h5>
                                <textarea  name="deskripsi"  value="{{$data ->deskripsi}}" class="form-control @error('deskripsi')
                                    is-invalid
                                @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"> @error('deskripsi') 
                                {{$message}}
                                @enderror {{$data ->deskripsi}}</textarea>
                            </div> --}}

                             <div class="col-md-6 mb-3 w-50">
    <h5>Deskripsi:</h5>
    <textarea name="deskripsi" value="{{ $data ->deskripsi }}" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleInputEmail1" > {{$data ->deskripsi}}</textarea>
    @error('deskripsi')
    {{$message}}
    @enderror
</div>

                             <div class="col-md-6 mb-3 w-50">
                                <h5>Kategori:</h5>
                                <select class="form-select" name="kategori_id" id="kategori_id" aria-label="Default select example">
                                    <option disabled value>Pilih Kategori</option>
                                   
                                    @foreach ($dtkategori as $kt)
                                    <option value="{{ $kt->id }}"  {{ ($kt->id==$data->kategori_id)? "selected" : "" }}>{{ $kt->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Konten:</label>
                                <textarea name="konten" id="summernote" class="form-control @error('konten')
                                    is-invalid
                                @enderror" id="exampleInputEmail1"  aria-describedby="emailHelp">@error('konten')
                                {{$message}}
                                @enderror {!! $data->konten !!}</textarea>
                            </div> --}}
                              <div class="mb-3">
                                    <h3>Konten:</h3>
                                    <textarea name="konten" id="summernote" class="form-control @error('konten')
                                    is-invalid
                                @enderror" id="exampleInputEmail1" value="{{old('konten')}}"> {!! $data->konten !!}
                                   </textarea>
                                   @error('konten')
                                {{$message}}
                                  @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">kirim</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection