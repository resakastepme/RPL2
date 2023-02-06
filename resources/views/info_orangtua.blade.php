@extends('layouts.mainlayouts')
@section('content')
    <div class="container-xxl py-5 bg-dark hero-header">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col text-center text-lg-center">
                    <h1 class="display-3 text-white animated slideInLeft">Temukan berbagai artikel menarik khusus untuk para
                        orang tua!</h1>
                    <p class="text-white animated slideInLeft">
                        Scroll ke bawah untuk berbagai artikel yang menarik!
                    </p>
                    <i class="fa fa-angle-down animated bounceIn" style="font-size: 100px"></i>

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
                                <img src="{{ asset('img/video.jpeg') }}" style="width: 35%; height: 35%;">
                                <div class="input-group-append ms-3">

                                    <h5>Tahapan-tahapan Orang Tua Ajarkan 
                                    <p>Pendidikan Seks pada Anak</p></h5>
                                    <p class="description-height">Pendidikan seks merupakan upaya pengajaran,
                                    <p class="description-height">penyadaran, dan pemberian informasi tentang 
                                    <p class="description-height">masalah seksual.</p>
                                    <a href=""> Read More... </a>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="col-sm-4 text-center wow fadeInUp">

                    <div class="service-item rounded">
                        <div class="p-4">
                        <div class="input-group mb-3">
                         <input type="text" class="form-control">
                     <div class="input-group-append"><button class="btn btn-primary"><i class="fas fa-search"></i></button></div>
                        </div>
                    </div>

                    <br>

                    <div class="service-item rounded">
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
