@extends('layouts.dashboard')

@section('title','report')

@section('content')
@include('sweetalert::alert')
    <section class="px-5 py-2">
        <header>
            <h3>Tambah Surat Tugas</h3>
            <p>Tambahkan Surat Tugas untuk disimpan</p>
        </header>

        <button class="btn btn-primary" id="btnBuatForm btn btn-success" onclick="toggleForm()">Tambahkan Surat Tugas</button>
    
            <form id="myForm" class="hidden" action="{{ route('letter.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <!-- Isi formulir di sini -->
                <div class="row">
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="col-md-12 col-md-6">
                                <div class="form-group ">
                                    <label for="document_title">Judul Surat Tugas</label>
                                    <input class="form-control" type="text" id="judul" name="judul">
                                    
                                </div>
                    
                                <div class="form-group mt-2">
                                    <label for="created_date">Tanggal Diupload</label>
                                    <input class="form-control" type="date" id="created_date" name="tgl_upload">
                                
                                </div>

                                <div class="form-group mt-2">
                                    <label for="document_file">File Dokumen</label>
                                    <input class="form-control" type="file" id="work_letter_file" name="file">
                                
                                </div>
                            </div>
                            

                            <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                        </div>
                    </div>
                </div>  
            </form>
            <div class="col-md-6">
                <form action="/letter" class="form" Method="GET">
                    <div class="form-group mt-2 ">
                        <input type="text" name="keyword" class="form-control w-75 d-inline" id="keyword" placeholder="Ketikkan keyword" value="{{ request('keyword') }}">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </div>
                </form>
            </div>
        

        <div class="container">
            <div class="row mt-4">
                @php $incrementLetter = 0 @endphp
                @if(!empty($letters) && $letters->count())
                    @foreach($letters as $letter)
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                   
                                    <div class="report-text">
                                        <p class="report-text mt-3" style="font-weight:bold; font-size:16px;">
                                            {{ $letter->judul }}
                                        </p>
                                        <p class="report-text " style="font-weight:bold; font-size:14px;">
                                            {{ $letter->tgl_upload }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('letter.edit',$letter->id) }}" class="btn btn-primary mt-2" >
                                            <img src="./assets/images/pen.svg" alt="" width="20px">
                                        </a>
                                        <span>
                                            <a href="{{ route('letter.delete', ['id' => $letter->id]) }}" class="btn btn-danger mt-2" onclick="event.preventDefault(); document.getElementById('delete-form{{ $letter->id }}').submit();"> 
                                            <img src="./assets/images/trash.svg" alt="" width="20px">
                                            </a>
                                            <form id="delete-form{{ $letter->id }}" action="{{ route('letter.delete', ['id' => $letter->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        </span>
                                        <span><a href="{{ route('letter.download', ['id' => $letter->id]) }}" class="btn btn-success mt-2" > 
                                            <img src="./assets/images/download.svg" alt="" width="20px">
                                        </a></span>

                                        
                                    </div>
                                  
                                </div>
                            
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 text-center py-5">
                        Tidak ada Surat Tugas
                    </div>
                @endif
            </div>
        </div>
    
    </section>

@endsection

@push('before-scripts')
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