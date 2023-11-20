<style>
img.nova {
          width:325px;
          height: 300px;
          object-fit: cover;
        }
</style>
<div class="main_content_iner ">
    <div class="container-fluid p-0 ">
        <div class="row ">
            <div class="col-12">
                <div class="dashboard_header mb_50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="dashboard_header_title">
                                <h3></h3>
                            </div>
                        </div>
                        @foreach ($data as $index=>$row )


                        <div class="card shadow-sm mb-5 bg-white rounded ">
                            <div class="row">
                                <div class="col-5" style="width: 340px;">
                                    <div>
                                        <img src="{{ asset('thumbnail/'.$row->thumbnail) }}" class="nova">
                                    </div>
                                </div>
                                <div class="col-5 my-auto">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $row->judul }}</h4>


                                        <p class="card-text" style="font-size: 150%">
                                            {{Str::limit($row->deskripsi,60) }}
                                        </p>
                                        <p class="card-text"><small class="text-muted">{{ $row->created_at->format('d F Y') }}</small></p>
                                        <br>
                                        {{-- <a href="{{ route('show', $row->id) }}" class="btn btn-primary p-1">Baca Selengkapnya</a> --}}
                                        
                                        <p class="mt-2">                                                
                                            @if ($row->judul <= now())
                                                <span class="badge bg-warning text-white" style="font-size: 85%">Expired</span>
                                            @elseif ($row->status == 'pending')
                                                <span class="badge bg-warning text-dark" style="font-size: 85%">Menunggu</span>
                                            @elseif ($row->status == 'ditolak')
                                                <span class="badge bg-danger text-white" style="font-size: 85%">Ditolak</span>
                                            @else
                                                <span class="badge bg-success text-white" style="font-size: 85%">Diterima</span>
                                            @endif</p>
<a href="/tampilkandatapostingan/{{ $row->id }}" class="btn btn-warning" style="float: right;">Edit</a>
<a href="#" class="btn btn-danger delete mr-2 " data-id="{{ $row->id }}" style="float: right;" data-judul="{{ $row->judul }}">Hapus</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">

                                </div>
                            </div>
                        </div>


                        <div>
                        @endforeach

                            showing
                            {{ $data->firstitem() }}
                            to
                            {{ $data->lastitem() }}
                            of
                            {{ $data->total() }}
                            entries
                        </div>
                        <div class="pull-right">
                            {{ $data ->withQueryString()-> links() }}
                        </div>
                    </div>
                </div>
</div>
</div>
</div>
</div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
</div>