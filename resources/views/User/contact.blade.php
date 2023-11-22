@extends('layouts.home')
@section('home')
  
    <div class="site-blocks-cover overlay" style="background-image: url(images/kontaksu.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">Contact Us</h1>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-first">
          <div class="col-md-7">
            <form action="{{ route('report') }}" method="post" class="bg-white">
              @csrf
              
              <div class="p-3 p-lg-5 border">
                <h3>Form Pengaduan</h3>
                <input type="hidden" class="form-control" id="c_fname" name="c_fname" value="{{ Auth::user()->name }}">
                <input type="hidden" class="form-control" id="c_email" name="c_email" value="{{ Auth::user()->email }}">
                <div class="form-group row">
                  <div class="col-md-12">
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control" placeholder="Jika anda menemukan masalah atau bug di dalam website ini silahkan laporkan di sini"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                  </div>
                </div>
              </div>
            </form>
          </div>
@foreach ($info as $row )

          <div class="col-md-5">
            <div class="p-4 border mb-3 bg-white">
             <p class="mb-0">Kota</p>
              <p class="mb-4">{{ $row->kota }}</p>
              <p class="mb-0">Alamat</p>
              <p class="mb-4">{{ $row->alamat }}</p>

              <p class="mb-0">No.Telpon</p>
              <p class="mb-4"><a href="#">{{ $row->no }}</a></p>

              <p class="mb-0">Email Admin</p>
              <p class="mb-4"><a href="#">{{ $row->email }}</a></p>

            </div>
            
          </div>
         @endforeach
        </div>
      </div>
    </div>
    @endsection