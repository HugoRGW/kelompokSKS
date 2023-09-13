 @extends('layouts.template')

@section('admin')
        
                    <div class="animated fadeIn">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Syarat Dan Ketentuan:</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered">
                                            <tbody>

                                                <form action="{{ route('syarat-dan-ketentuan.update') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="isi">Isi Syarat dan Ketentuan: </label>
                                                        <textarea name="isi" class="form-control"  id="summernote" rows="10">{!! $termsAndConditions->isi !!}</textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </form>



                                    </div>
                                </div>
                            </div>
                            </tr>

                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
           </div>
               <script src="vendors/text_editor/summernote-bs4.js'"></script>

           
@endsection