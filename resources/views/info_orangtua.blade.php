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
                                <img src="{{ asset('img/video.jpg') }}" style="width: 30%; height: 30%;">
                                <div class="input-group-append ms-3">

                                    <h5>Playing Games</h5>
                                    <p>A person who love competitive B)</p>
                                    <a href=""> Read More... </a>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="col-sm-4 text-center wow fadeInUp">

                    <div class="service-item rounded">
                        <div class="p-4">
                            <i class="fa fa-3x fa-gamepad text-primary"></i>
                            <h5>Playing Games</h5>
                            <br>
                            <p>A person who love competitive B)</p>
                        </div>
                    </div>

                    <br>

                    <div class="service-item rounded">
                        <div class="p-4">
                            <i class="fa fa-3x fa-gamepad text-primary"></i>
                            <h5>Playing Games</h5>
                            <br>
                            <p>A person who love competitive B)</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{-- <div class="row g-5">
    <div class="col-sm-6">
        <div class="container">
            <div class="service-item rounded pt-3">

                <div class="p-4">
                    <i class="fa fa-3x fa-gamepad text-primary mb-4"></i>
                    <h5>Playing Games</h5>
                    <br>
                    <p>A person who love competitive B)</p>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="container">

            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-gamepad text-primary mb-4"></i>
                    <h5>Playing Games</h5>
                    <br>
                    <p>A person who love competitive B)</p>
                </div>
            </div>

            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-gamepad text-primary mb-4"></i>
                    <h5>Playing Games</h5>
                    <br>
                    <p>A person who love competitive B)</p>
                </div>
            </div>

            <div class="service-item rounded pt-3">
                <div class="p-4">
                    <i class="fa fa-3x fa-gamepad text-primary mb-4"></i>
                    <h5>Playing Games</h5>
                    <br>
                    <p>A person who love competitive B)</p>
                </div>
            </div>

        </div>
    </div> --}}

    </div>
@endsection
