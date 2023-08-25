@extends('layouts.portal')

@section('title','Portal SPIP Peruri')

@section('content')
<!-- Header -->
<section class="header pt-lg-60 pb-50">
    <div class="container-xxl container-fluid">
        <div class="row gap-lg-0 gap-5">
            <div class="col-lg-6 col-12 my-auto">
                <h1 class="header-title text-lg new-color-palette-1 fw-bold">
                    <span class="underline-blue">Perum</span>  Peruri
                </h1>
                <p class="header-title text-sm color-palette-1 fw-medium">
                    Satuan Pengawasan Internal <span class="underline-blue">Perusahaan</span>
                </p>
                <p class="mt-30 mb-40 text-lg color-palette-1">Perusahaan berkelas dunia di bidang  Integrated Security<br
                        class="d-md-block d-none"> Printing and System
                </p>
                <div class="d-flex flex-lg-row flex-column gap-4">
                    <a class="btn btn-get text-lg text-white rounded-pill" href="#feature" role="button">Mulai</a>
                    
                </div>
            </div>
            <div class="col-lg-6 col-12 d-lg-block d-none">
                <div class="d-flex justify-content-lg-end justify-content-center me-lg-5">
                    <div class="position-relative" data-aos="zoom-in">
                        <img src="{{ asset('./portal/assets/img/banner-about.svg') }}" class="img-fluid" alt="">
                        
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3 Column - Feature -->
<section id="feature" class="feature pt-50 pb-50">
    <div class="container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 text-center mb-30">Visi & Misi<br> Satuan Pengawasan Internal Perusahaan
        </h2>
        <div class="row align-items-center px-lg-5 mx-auto gap-lg-0 gap-4">
            <div class="col-lg-7 col-12 d-lg-flex d-none justify-content-lg-end pe-lg-60" data-aos="zoom-in">
                <img src="{{ asset('./portal/assets/img/visi&misi.png') }}" width="612" height="452" class="img-fluid" alt="">
            </div>
            <div class="col-lg-5 col-12 ps-lg-60">
                <div class="">
                    <h2 class="text-4xl fw-bold color-palette-1 mb-10">Visi
                    </h2>
                    <p class="text-lg color-palette-1 mb-30">Menjadi auditor internal terpercaya, profesional , independen dan mampu memberikan  nilai tambah bagi perusahaan
                    
                </div>
                <div class="">
                    <h2 class="text-4xl fw-bold color-palette-1 mb-10">Misi
                    </h2>
                    <p class="text-lg color-palette-1 mb-30">Membantu perusahaan dalam mencapai visi misi dan tujuan strategis, sesuai dengan fungsi yang telah diamanatkan, yaitu memberikan layanan assurance dan konsultasi independen dan obyektif mengenai manajemen resiko, internal kontrol, dan proses tata kelola diseluruh area kegiatan perusahaan. Dilaksanakan secara profesional, sesuai dengan kaidah standar profesi auditor internal yang berlaku secara profesional
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5 Column - Featured-portal -->
<section class="featured-portal pt-50 pb-50">
    <div class="container-fluid">
        <h2 class="text-4xl fw-bold color-palette-1 mb-30">Produk Kami<br> Perum Peruri
        </h2>
        <div class="d-flex flex-row flex-lg-wrap overflow-setting justify-content-lg-between gap-lg-3 gap-4"
            data-aos="fade-up">
            <div class="featured-portal-card position-relative">
                <a href="">
                    <div class="blur-sharp">
                        <img src="{{ asset('./portal/assets/img/sign.svg') }}" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                                <img src="{{ asset('./portal/assets/img/logo.svg') }}" alt="">
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">Peruri Sign</p>
                                <p class="fw-light text-white m-0">Peruri</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="featured-portal-card position-relative">
                <a href="./src/detail.html">
                    <div class="blur-sharp">
                        <img src="{{ asset('./portal/assets/img/code.svg') }}" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                                <img src="{{ asset('./portal/assets/img/logo.svg') }}" alt="">
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">Peruri Code</p>
                                <p class="fw-light text-white m-0">Peruri</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="featured-portal-card position-relative">
                <a href="./src/detail.html">
                    <div class="blur-sharp">
                        <img src="{{ asset('./portal/assets/img/trust.svg') }}" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                                <img src="assets/img/logo.svg" alt="">
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">Peruri Trust</p>
                                <p class="fw-light text-white m-0">Peruri</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="featured-portal-card position-relative">
                <a href="./src/detail.html">
                    <div class="blur-sharp">
                        <img src="{{ asset('./portal/assets/img/e-met.svg') }}" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                                <img src="{{ asset('./portal/assets/img/logo.svg') }}" alt="">
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">E-Materai</p>
                                <p class="fw-light text-white m-0">Peruri</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="featured-portal-card position-relative">
                <a href="./src/detail.html">
                    <div class="blur-sharp">
                        <img src="{{ asset('./portal/assets/img/trust.svg') }}" width="205" height="270" alt="">
                    </div>
                    <div class="cover position-absolute bottom-0 m-32">
                        <div class="d-flex flex-column h-100 justify-content-between text-decoration-none">
                            <div class="game-icon mx-auto">
                                <img src="{{ asset('./portal/assets/img/logo.svg') }}" alt="">
                            </div>
                            <div>
                                <p class="fw-semibold text-white text-xl m-0">Peruri Trust</p>
                                <p class="fw-light text-white m-0">Peruri</p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>

<!-- Story -->
<section class="story pt-50 pb-50">
    <div class="container-xxl container-fluid">
        <div class="row align-items-center px-lg-1 mx-auto gap-lg-0 gap-4">
            
            <div class="col-lg-5 col-12 ps-lg-60">
              
                @php $incrementGuide = 0 @endphp
                @forelse($guides as $guide)
                    <div class="">
                        <h2 class="text-4xl fw-bold color-palette-1 mb-10">Pedoman SPIP
                        </h2>
                        <p class="text-lg color-palette-1 mb-30">{!! $guide->description !!}
                        
                        <div class="d-md-block d-flex flex-column w-100">
                            <a class="btn btn-read text-lg rounded-pill" href="#" role="button">Baca</a>
                        </div>
                    </div>
                @empty
                    <div class="">
                        <h2 class="text-4xl fw-bold color-palette-1 mb-10">Pedoman SPIP
                        </h2>
                        <div class="d-md-block d-flex flex-column w-100">
                            <a class="btn btn-read text-lg rounded-pill" href="#" role="button">Baca</a>
                        </div>
                    </div>
                @endforelse

                @php $incrementMethod = 0 @endphp
                @forelse($methods as $method)
                    <div class="mt-3" >
                        <h2 class="text-4xl fw-bold color-palette-1 mb-10">Metodologi SPIP
                        </h2>
                        <p class="text-lg color-palette-1 mb-30">{!! $method->description !!}
                        
                        <div class="d-md-block d-flex flex-column w-100">
                            <a class="btn btn-read text-lg rounded-pill" href="#" role="button">Baca</a>
                        </div>
                    </div>
                @empty
                    <div class="mt-3">
                        <h2 class="text-4xl fw-bold color-palette-1 mb-10">Metodologi SPIP
                        </h2>
                        <div class="d-md-block d-flex flex-column w-100">
                            <a class="btn btn-read text-lg rounded-pill" href="#" role="button">Baca</a>
                        </div>
                    </div>
                @endforelse
            </div>
            <div class="col-lg-7 col-12 d-lg-flex d-none justify-content-lg-end pe-lg-60" data-aos="zoom-in">
                <img src="{{ asset('./portal/assets/img/pedoman.png') }}" width="612" height="452" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>


<section id="feature" class="feature pt-50 pb-50">

    @php $incrementOther = 0 @endphp
    @forelse($others as $other)
    <div class="container-fluid">
        <div class="row align-items-center px-lg-5 mx-auto gap-lg-0 gap-4">
            <div class="col-lg-7 col-12 d-lg-flex d-none justify-content-lg-end pe-lg-60" data-aos="zoom-in">
                <div class="ratio ratio-16x9">
                    <iframe src="{{ $others->isEmpty() ? '' : $others[0]->url_video }}" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-5 col-12 ps-lg-60">
                <div class="">
                    <h2 class="text-4xl fw-bold color-palette-1 mb-10">Penjelasan
                    </h2>
                    <p class="text-lg color-palette-1 mb-30">
                        {!! $other->description !!}
                    </p>
                    
                </div>
                
            </div>
        </div>
    </div>
    @empty
    <div class="container-fluid">
        <div class="row align-items-center px-lg-5 mx-auto gap-lg-0 gap-4">
            <div class="col-lg-7 col-12 d-lg-flex d-none justify-content-lg-end pe-lg-60" data-aos="zoom-in">
                <div class="ratio ratio-16x9">
                    <iframe src="" title="YouTube video" allowfullscreen></iframe>
                </div>
                <div class="col-lg-5 col-12 ps-lg-60">
                    <div class="">
                        <h2 class="text-4xl fw-bold color-palette-1 mb-10">Penjelasan
                        </h2>
                        <p class="text-lg color-palette-1 mb-30"></p>
                        
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    @endforelse
</section>

<!-- Footer -->
<section class="footer pt-50">
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-lg-start text-center">
                    <a href="" class="mb-30">
                        <img src="{{ asset('./portal/assets/img/peruri-footer.svg') }}" alt="">
                    </a>
                    <p class="mt-30 text-lg color-palette-1 mb-30">Perusahaan berkelas dunia di bidang  Integrated Security Printing and System

                    <p class="mt-30 text-lg color-palette-1 mb-30">Copyright 2023. All Rights Reserved.</p>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-20">
                    <div class="row gap-sm-0">
                        <div class="col-md-6 col-6 mb-lg-0 mb-25  text-center">
                            <p class="text-lg fw-semibold color-palette-1 mb-12">Alamat</p>
                            <ul class="list-unstyled">
                                <li class="mb-6 text-lg color-palette-1 text-decoration-none fw-bold">
                                    Kantor Pusat:
                                </li>
                                <li class="mb-6 text-lg color-palette-1 text-decoration-none ">
                                    Jl. Palatehan No. 4, Blok K-V, Kebayoran Baru, Jakarta 12160
                                </li>
                                <li class="mb-6  text-lg color-palette-1 text-decoration-none fw-bold">
                                    Kawasan Produksi
                                </li>
                                <li class="mb-6  text-lg color-palette-1 text-decoration-none">
                                    
                                    Desa Parung Mulya, Ciampel, Karawang, Jawa Barat 41361
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-md-6 col-4 mt-lg-0 mt-md-0 mt-25 text-center">
                            <p class="text-lg fw-semibold color-palette-1 mb-12">Hubungi Kami</p>
                            <ul class="list-unstyled">
                                <li class="mb-6">
                                    <a href="mailto: contact@peruri.co.id"
                                        class="text-lg color-palette-1 text-decoration-none">contact@peruri.co.id</a>
                                </li>
                                <li class="mb-6">
                                    <a href="telp:   021-7395000"
                                        class="text-lg color-palette-1 text-decoration-none">
                                        021-7395000
                                        </a>
                                </li>
                                <li class="mb-6  color-palette-1 mb-12 fw-bold">
                                    Hotline Kami
                                </li>
                                <li class="mb-6">
                                    <a href="telp:   1500159"
                                    class="text-lg color-palette-1 text-decoration-none">
                                    1500159
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>

@endsection