@extends('layouts.dashboard')

@section('title', 'bagian metodologi')

@section('content')
@include('sweetalert::alert')
<section class="px-5 py-2">
    <header>
        <h3>Metodologi SPIP</h3>
        <p>Manage data Metodologi SPIP</p>
    </header>
    
    @include('components.menu-methodology')

    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/images/guide.svg') }}" alt="profile" style="width: 80%; height: 80%px; border-radius: 30px;">
            </div>
            @forelse($guides as $guide)
            <div class="col-md-6 align-items-center">
                
                <div class="card">
                    <div class="card-body">
                        <div class="profile-data py-3 px-1">
                        <form action="{{ route('guide.update', $guide->id) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            
                            <div class="mb-3">
                            <label for="">Deskripsi</label>
                            <textarea class="form-control" placeholder="Masukkan deskripsi" id="editor" name="description">{{ $guide->description }}</textarea>
                            </div>


                        <button type="submit" class="btn btn-primary">
                            Ubah Data
                        </button>
                        <span>
                            <a href="{{ route('guide.delete', $guide->id) }}" class="btn btn-danger">Hapus</a>
                        </span>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            @empty
                <div class="col-md-6 align-items-center">
                <div class="card">
                    <div class="card-body">
                    <div class="profile-data py-3 px-1">
                            <form action="{{ route('guide.store') }}" method="post" enctype="multipart/form-data">
                            
                            @csrf
                            
                            <div class="mb-3">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" placeholder="Masukkan deskripsi" id="editor" style="height: 100px" name="description"></textarea>
                            </div>


                            <button type="submit" class="btn btn-primary">
                                Simpan Data
                            </button>
                        </div>
                    </div>
                </div> 
                </div>
            @endforelse
        </div>

        
    </div>
    
</section>

@endsection

@push('before-scripts')

<script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    CKEDITOR.replace('editor');
</script>

@endpush