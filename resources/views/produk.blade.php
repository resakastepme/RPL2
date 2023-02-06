@extends('layouts.mainlayouts')
@section('content')
<div class="container-xxl py-5 bg-dark hero-header">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col text-center text-lg-center">
                <h1 class="display-3 text-white animated slideInLeft">Temukan berbagai Produk Rekomenasi dari kami!</h1>
                <p class="text-white animated slideInLeft">
                    Scroll ke bawah untuk berbagai produk yang menarik!
                </p>
                <i class="fa fa-angle-down animated bounceIn" style="font-size: 100px"></i>

            </div>
        </div>
    </div>
</div>
<div class="container-xxl py-5 bg-dark">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col text-center text-lg-start">
                TEST
            </div>
        </div>
    </div>
</div>

<div class="container-xxl">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-sm-8 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="service-item">
                        <div class="p-4">

                            <div class="input-group">
                                <img src="{{ asset('img/kondom.jpeg') }}" style="width: 35%; height: 35%;">
                                <div class="input-group-append ms-3">

                                    <h5>Kondom
                    
                                    </h5>
                                    <p class="description-height">Alat Kontrasepsi satu ini paling mudah ditemukan 
                                    <p class="description-height">dan digunakan bagi pasangan untuk mencegah
                                    <p class="description-height">kehamilan yang tidak diinginkan.</p>
                                    <a href=""> Lihat produk... </a>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="col-sm-4 text-center wow fadeInUp">

                    <div class="service-item rounded">

                        <div class="p-4">
                            <h5> Cari Produk </h5>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari disini...">
                                <div class="input-group-append"><button class="btn btn-primary">
                                    <i class="fas fa-search"></i></button></div>
                            </div>
                        </div>

                    </div>

                    <div class="service-item rounded mt-3">
                        <div class="p-4">

                            <h5>Rekomendasi Brand Produk</h5>
                            <br>
                            <img src="{{ asset('img/durex.jpg') }}" class="photo-crop">
                            <img src="{{ asset('img/pasante2.jpeg') }}" class="photo-crop">
                            <img src="{{ asset('img/fiesta.jpeg') }}" class="photo-crop">
                            <p></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
