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
                <div class="col-md-6">
                  <div class="ratio ratio-4x3">
                    <iframe width="560" height="315" src="{{ $others->isEmpty() ? '' : $others[0]->url_video }}" frameborder="0" allowfullscreen></iframe>

                  </div>
                </div>
                @forelse($others as $other)
                <div class="col-md-6 align-items-center">
                 
                  <div class="card">
                      <div class="card-body">
                          <div class="profile-data py-3 px-1">
                            <h5>Update Link Form Url Video dan Penjelasan</h5>
                            <form action="{{ route('other.update', $other->id) }}" method="post" enctype="multipart/form-data">
                              @method('put')
                              @csrf
                              <div class="mb-3">
                                <label for="judul" class="form-label">Link Video</label>
                                <input type="text" class="form-control" id="url" aria-describedby="url" value="{{ $other->url_video }}" name="url_video">
                                
                              </div>
                              <div class="mb-3">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" placeholder="Masukkan deskripsi" id="editor" name="description">{{ $other->description }}</textarea>
                              </div>


                            <button type="submit" class="btn btn-primary">
                                Ubah Data
                            </button>
                            <span>
                              <a href="{{ route('other.delete', $other->id) }}" class="btn btn-danger">Hapus</a>
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
                              <h5>Tambah Link Form Url Video dan Penjelasan</h5>
                              <form action="{{ route('other.store') }}" method="post" enctype="multipart/form-data">
                               
                                @csrf
                                <div class="mb-3">
                                  <label for="title" class="form-label">Link Video</label>
                                  <input type="text" class="form-control" id="judul" aria-describedby="judul" name="url_video">
                                  
                                </div>
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
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endpush