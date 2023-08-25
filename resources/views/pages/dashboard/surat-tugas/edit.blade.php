@extends('layouts.dashboard')

@section('title','report')

@section('content')

    <section class="px-5 py-2">
        <header>
            <h3>Edit Surat Tugas</h3>
            <p>Edit Surat Tugas untuk disimpan</p>
        </header>
        
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('letter.update', $letter->id) }}" enctype="multipart/form-data" method="post">
                    @method('PUT')
                    @csrf
                    <!-- Isi formulir di sini -->
                    <div class="row">
                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="col-md-12 col-md-6">
                                    <div class="form-group ">
                                        <label for="document_title">Judul Surat Tugas</label>
                                        <input class="form-control" type="text" id="work_letter_title" name="judul"
                                        value="{{ $letter->judul }}"
                                        
                                        >
                                        
                                    </div>
                        
                                    <div class="form-group mt-2">
                                        <label for="created_date">Tanggal Diupload</label>
                                        <input class="form-control" type="date" id="created_date" name="tgl_upload"
                                        value="{{ $letter->tgl_upload }}">
                                    
                                    </div>


                                    <div class="form-group mt-2">
                                        <label for="document_file">File Dokumen</label>
                                        <input class="form-control" type="file" id="work_letter_file" name="file"
                                        value="{{ $letter->file }}">
                                    
                                    </div>
                                </div>
                                

                                <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                            </div>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </section>

@endsection

@push('after-scripts')
<script>
    function toggleForm() {
      var form = document.getElementById("myForm");
      form.classList.toggle("hidden");
    }
</script>



<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor2' );
</script>

@endpush