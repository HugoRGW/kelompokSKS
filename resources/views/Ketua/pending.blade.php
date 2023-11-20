@extends('layouts.ketua')
@section('content')
<style>
    img.nova {
        width: 460px;
        height: 100px;
        object-fit: cover;
    }

</style>
@foreach ($data as $index=>$row )

<div class="card-deck">
        <div class="card mb-4">
          <img class="card-img-top" src="..." alt="">
          <div class="card-body">
            <h5 class="card-title">{{ $row->judul }}</h5>
            <p class="card-text mb-4">{{Str::limit($row->deskripsi,60) }}</p>
                            <p class="card-text"><small class="text-muted">{{ $row->created_at->format('d F Y') }}</small></p>
             <p class="mb-3">
                    @if ($row->judul <= now()) <span class="badge bg-warning text-white" style="font-size: 85%">Expired</span>
                        @elseif ($row->status == 'pending')
                        <span class="badge bg-warning text-dark" style="font-size: 85%">Menunggu</span>
                        @elseif ($row->status == 'ditolak')
                        <span class="badge bg-danger text-white" style="font-size: 85%">Ditolak</span>
                        @else
                        <span class="badge bg-success text-white" style="font-size: 85%">Diterima</span>
                        @endif</p>
            <a href="{{ route('show', $row->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
            
        </div>
          <div class="card-footer">
                  <a href="/tampilkandatapostingan/{{ $row->id }}" class="card__btn mr-5" style="float: left;">Edit</a>
              
<a href="/deletepostingan/{{ $row->id }}" class="card__danger" data-id="{{ $row->id }}" style="float: left;" data-judul="{{ $row->judul }}">Hapus</a>
        </div>
        </div>
        
      </div>
      
    </div>
@endforeach




@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script>
    $('.card__danger').click(function() {
        var postinganid = $(this).attr('data-id');
        var judul = $(this).attr('data-judul');
        swal({
                title: "Yakin Mau Hapus Data ?"
                , text: "kamu akan menghapus postingan dengan judul " + judul + ""
                , icon: "warning"
                , buttons: true
                , dangerMode: true
            , })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletepostingan/" + postinganid + ""
                    swal("Data Berhasil dihapus", {
                        icon: "success"
                    , });
                } else {
                    swal("Data tidak jadi dihapus");
                }
            });
    })

</script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")

    @endif

</script>

<script>
    $(document).ready(function() {
        var url = window.location.href;
        $('#sidebar_menu a').filter(function() {
            return this.href == url;
        }).closest('li').addClass('active');
    });

</script>

@endpush
