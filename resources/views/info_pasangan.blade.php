@extends('layouts.mainlayouts')
@section('content')
<div class="container-xxl py-5 bg-dark hero-header">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col text-center text-lg-center">
                <h1 class="display-3 text-white animated slideInLeft">Temukan berbagai artikel menarik khusus untuk para Pasangan!</h1>
                <p class="text-white animated slideInLeft">
                    Scroll ke bawah untuk berbagai artikel yang menarik!
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
                                <img src="{{ asset('img/pasangan2.jpeg') }}" style="width: 30%; height: 40%;">
                                <div class="input-group-append ms-3">

                                    <h5>Pertimbangan Hal Ini Sebelum
                                        <p> Berhubungan Seks Pra-Nikah</p>
                                    </h5>
                                    <p class="description-height">Berhubungan seks sebelum nikah makin dianggap wajar
                                    <p class="description-height">dengan berbagai alasan. Padahal perlu kita tau kalau
                                    <p class="description-height">ada banyak banget resiko yang bisa terjadi di baliknya.</p>
                                    <a href=""> Selengkapnya... </a>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="col-sm-4 text-center wow fadeInUp">

                    <div class="service-item rounded">

                        <div class="p-4">
                            <h5> Cari Artikel </h5>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari disini...">
                                <div class="input-group-append"><button class="btn btn-primary">
                                    <i class="fas fa-search"></i></button></div>
                            </div>
                        </div>

                    </div>

                    <div class="service-item rounded mt-3">
                        <div class="p-4">

                            <h5>Artikel Sorotan</h5>
                            <br>
                            <p></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
