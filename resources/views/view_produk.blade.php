@extends('layouts.mainlayouts')
@section('content')
    <?php
    error_reporting(0);
    ?>

    <div class="container-xxl py-5 bg-dark hero-header">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col text-center text-lg-center">
                    <h1 class="display-3 text-white animated slideInLeft">Temukan berbagai Produk Rekomendasi dari kami!</h1>
                    <p class="text-white animated slideInLeft">
                        Scroll ke bawah untuk berbagai produk yang menarik!
                    </p>
                    <i class="fa fa-angle-down animated bounceIn" style="font-size: 100px"></i>

                </div>
            </div>
        </div>
    </div>


    <div class="container-xxl">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="card" style="width:750px">
                        <div class="card-body">

                            <div class="row">

                                <h1 class="text-center mb-5"> {{ $selectDB[0]->judul }} </h1>
                                <img src="{{ asset('storage/' . $selectDB[0]->gambar) }}"
                                    style="width: 80%; height: 80%; margin: auto;">

                                <div class="mt-5">
                                    {!! html_entity_decode($selectDB[0]->deskripsi) !!}
                                </div>

                                <hr class="mt-5 wow zoomIn" data-wow-delay="1s">

                                <div class="text-center">
                                    <h5> Sumber/Penulis </h5>
                                    <p style="font-size: 15px"> {!! html_entity_decode($selectDB[0]->sumberpenulis) !!} </p>
                                    <h5> Dibuat pada </h5>
                                    <p style="font-size: 15px"> {{ $selectDB[0]->created_at }} </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 wow fadeInUp">

                    <div class="service-item rounded mt-3">
                        <div class="p-4">

                            <h5>Rekomendasi Brand Produk</h5>
                            <br>
                            <img src="{{ asset('img/durex.jpg') }}" class="photo-crop" >
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
