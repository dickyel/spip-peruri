@extends('layouts.dashboard')

@section('title','report')

@section('content')
@include('sweetalert::alert')
    <section class="px-5 py-2">
        <header>
            <h3>Tambah Laporan</h3>
            <p>Tambahkan Laporan untuk disimpan</p>
        </header>

        <button class="btn btn-primary" id="btnBuatForm btn btn-success" onclick="toggleForm()">Tambahkan Laporan</button>
   
        <form id="myForm" class="hidden" action="{{ route('report.store') }}" enctype="multipart/form-data" method="post">
            @csrf
            <!-- Isi formulir di sini -->
            <div class="row">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="col-md-12 col-md-6">
                            <div class="form-group ">
                                <label for="document_title">Judul Laporan</label>
                                <input class="form-control" type="text" id="document_title" name="judul">
                                
                            </div>
                
                            <div class="form-group mt-2">
                                <label for="created_date">Tanggal Diupload</label>
                                <input class="form-control" type="date" id="tgl_upload" name="tgl_upload">
                            
                            </div>


                            <div class="form-group mt-2">
                                <label for="file">File Dokumen</label>
                                <input class="form-control" type="file" id="document_file" name="file">
                            
                            </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                    </div>
                </div>
            </div>  
        </form>
        <div class="col-md-6">
            <form action="/report" class="form" Method="GET">
                <div class="form-group mt-2 ">
                    <input type="text" name="keyword" class="form-control w-75 d-inline" id="keyword" placeholder="Ketikkan keyword" value="{{ request('keyword') }}">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="row mt-4">
                @php $incrementReport = 0 @endphp
                @if(!empty($reports) && $reports->count())
                    @foreach($reports as $report)
                        
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">

                                    <div class="report-thumbnail">
                                        <img src="" alt="" class="w-100">
                                    </div>


                                    <a href="{{ route('report.preview', ['id' => $report->id]) }}" style="text-decoration:none; color: #0E50A0;" >
                                        <div class="report-text text-center">
                                            <p class="report-text mt-3" style="font-weight:bold; font-size:16px;">
                                                {{ $report->judul }}
                                            </p>
                                            <p class="report-text " style="font-weight:bold; font-size:14px;">
                                                {{ $report->tgl_upload }}
                                            </p>
                                        </div>
                                    </a>    
                                   
                                    <div class="text-center">
                                        <a href="{{ route('report.edit', $report->id) }}" class="btn btn-primary mt-2" >
                                            <img src="./assets/images/pen.svg" alt="" width="20px">
                                        </a>
                                        <span>
                                            <a href="{{ route('report.delete', ['id' => $report->id]) }}" class="btn btn-danger mt-2" onclick="event.preventDefault(); document.getElementById('delete-form{{ $report->id }}').submit();"> 
                                            <img src="./assets/images/trash.svg" alt="" width="20px">
                                            </a>
                                            <form id="delete-form{{ $report->id }}" action="{{ route('report.delete', ['id' => $report->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        </span>
                                        <span><a href="{{ route('report.download', ['id' => $report->id]) }}" class="btn btn-success mt-2" > 
                                            <img src="./assets/images/download.svg" alt="" width="20px">
                                        </a></span>

                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
                        
                    @endforeach
                @else
                    <div class="col-12 text-center py-5">
                        Tidak ada Report 
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