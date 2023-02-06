@extends('layouts.mainlayouts')
@section('content')
<div class="container-xxl py-5 bg-dark hero-header">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col text-center text-lg-center">
                <h1 class="display-3 text-white animated slideInLeft">Ayo Konsultasikan masalah SexDu mu Temukan Solusinya disini!</h1>
                <p class="text-white animated slideInLeft">
                    Scroll ke bawah untuk berbagai masalah dan solusi!
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
<div class="col-sm-15 text-center wow fadeInUp">

<div class="service-item rounded">

    <div class="p-4">
        <h5> Cari Gejala Kamu disini </h5>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan gejala...">
            <div class="input-group-append"><button class="btn btn-primary">
                <i class="fas fa-search"></i></button></div>
        </div>
    </div>
</div>
</div>
<div class="container-xxl">
        <div class="container py-20">
            <div class="row g-5">

                <div class="col-sm-20 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="service-item">
                        <div class="p-4">

                            <div class="input-group">
                                <img src="{{ asset('img/hpv.jpeg') }}" style="width: 20%; height: 30%;">
                                <div class="input-group-append ms-3">

                                    <h5>Human papillomavirus (HPV)</h5>
                                    <p class="description-height-konsul">Virus yang dapat menyebabkan infeksi di permukaan kulit, serta berpotensi menyebabkan kanker Serviks. Infeksi virus ini ditandai
                                    <p class="description-height-konsul">dengan tumbuhnya kutil pada kulit di berbagai area tubuh,seperti lengan, tungkai, mulut,serta area kelamin.
                                    <p class="description-height-konsul">Gejala:</p>
                                    <p class="description-height-konsul">-Kutil di bahu, lengan, dan jari tangan</p>
                                    <p class="description-height-konsul">-Kutil di telapak kaki (plantar warts)</p>
                                    <a href=""> Selengkapnya... </a>

                                </div>
                            </div>


                        </div>
</div>
</div>
</div>
</div>
</div>
                
@endsection
