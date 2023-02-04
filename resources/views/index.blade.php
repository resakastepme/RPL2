@extends('layouts.mainlayouts')
@section('content')

<div class="container-xxl py-5" id="mulai">
    <div class="container">
        <div class="row g-4">

            <div class="col">
                <h1 class="wow fadeInUp" data-wow-delay="0.5s"> THIS IS FIRST CONTAINER </h1>
            </div>

        </div>
    </div>
</div>

<hr class="wow zoomIn" data-wow-delay="0.5s">
<div class="container-xxl py-5 bg-produk" >
    <div class="container">
        <div class="row g-4">

            <div class="col">
                <h1 class="text-white wow fadeInUp" data-wow-delay="0.7s"> PRODUK </h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Produk rekomendasi dari SexDu untuk "keamanan" anda.</p>
                <a href="#mulai" class="btn btn-color py-sm-3 px-sm-5 me-3 animated slideInLeft">KLIK DISINI</a>
            </div>

        </div>
    </div>
</div>

<hr class="wow zoomIn" data-wow-delay="0.7s">
<div class="container-xxl py-5 bg-konsul">
    <div class="container">
        <div class="row g-4">

            <div class="col">
                <h1 class="text-white wow fadeInUp" data-wow-delay="0.9s"> KONSULTASI </h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Temukan solusi bersama pasangan anda disini.</p>
                <a href="#mulai" class="btn btn-color py-sm-3 px-sm-5 me-3 animated slideInLeft">KLIK DISINI</a>
            </div>

        </div>
    </div>
</div>

<hr class="wow zoomIn" data-wow-delay="0.9s">
<!-- Footer Start -->
<div class="container-fluid bg-footer text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-color fw-normal mb-4">About Us</h4>
                <p class="text-white animated slideInLeft mb-4 pb-2">SexDu Project adalah sebuah tugas besar dari Bapak Hanhan Maulana, M.Kom., Ph.D. selaku 
                    Dosen Mata Kuliah Rekayasa Perangkat Lunak 2 </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-color fw-normal mb-4">Others</h4><br>
                <a href="#mulai" class="btn btn-color py-sm-1 px-sm-1 me-1 animated slideInLeft">Login As Admin</a>
            </div>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
@endsection
