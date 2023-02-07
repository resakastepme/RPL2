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

                <div class="col-md-8 wow fadeInUp" data-wow-delay="0.1s">

                    @foreach ($DB as $DATA)
                        {{-- <div class="service-item">
                            <div class="p-4">

                                <div class="input-group">
                                    <img src="{{ asset('storage/' . $DATA->gambar) }}" style="width: 35%; height: 35%;">
                                    <div class="input-group-append ms-3">

                                        <h5> {{ $DATA->judul }} </h5>
                                        <p> {{ substr($DATA->artikel, 0, 40) }}... </p>
                                        <a href=""> Read More >> </a>

                                    </div>
                                </div>


                                <hr>
                            </div>
                        </div> --}}

                        {{-- <div class="card-shadow">
                            <div class="card-body d-flex blog-flex">
                                <div class="flex-part1">
                                    <a href="">
                                        <img src="{{ asset('storage/'.$DATA->gambar) }}" style="width: 35%; height: 35%; ">
                                    </a>
                                </div>
                                <div class="flex-grow-1 flex-part2">
                                    <a href="">
                                        <h5> {{ $DATA->judul }} </h5>
                                    </a>
                                    <p>
                                        <a href="">
                                            {{ substr($DATA->artikel, 0, 50) }}...
                                        </a> <span><br>
                                            <a href="" class="btn btn-sm btn-outline-primary">
                                                Lanjutkan membaca
                                            </a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <br>
                        <div class="card" style="width:400px">
                            <img class="card-img-left" src="{{ asset('storage/'.$DATA->gambar) }}" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title">John Doe</h4>
                              <p class="card-text">Some example text.</p>
                              <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                          </div> --}}

                        <div class="card" style="width:750px">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <img class="card-img" src="{{ asset('storage/' . $DATA->gambar) }}" alt="Card image" style="width: 100%; height: 80%; ">
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title"> {{ $DATA->judul }} </h4>
                                        <p class="card-text"> {{ substr($DATA->artikel, 0, 150) }}... </p>
                                        <a href="#" class="btn btn-sm btn-outline-primary">Lanjutkan membaca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                    @endforeach

                    {{ $DB->links() }}

                </div>

                <div class="col-md-4 text-center wow fadeInUp">

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

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            alert('WOI WOI WOI');
        });
    </script>
@endsection
