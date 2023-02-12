@extends('layouts.mainlayouts')
@section('content')

<?php
    error_reporting(0)
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

                <div class="col-sm-8 wow fadeInUp" data-wow-delay="0.1s">

                    <section id="sectionCari" style="display: none;">
                        <h1> Anda mencari "{{ $input }}" </h1>
                    </section>

                    @foreach ($DB as $DATA)
                        <div class="card" style="width:750px">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <img class="card-img" src="{{ asset('storage/' . $DATA->gambar) }}" alt="Card image"
                                            style="width: 100%; height: 80%; ">
                                    </div>
                                    <div class="col-sm-8">
                                        <h4 class="card-title"> {{ $DATA->judul }} </h4>
                                        <p class="card-text"> {!! html_entity_decode(substr($DATA->deskripsi, 0, 175)) !!}... </p>
                                        <a href="/produk/{{ $DATA->id }}/view"
                                            class="btn btn-sm btn-outline-primary">Lihat Produk...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endforeach

                    {{ $DB->links() }}

                </div>

                <div class="col-sm-4 text-center wow fadeInUp">

                    <div class="service-item rounded">

                        <form action="/produk_cari" method="POST">
                            @csrf
                            <div class="p-4">
                                <h5 class="text-center"> Cari Jenis Produk </h5>
                                <div class="input-group mb-3">
                                    <input type="text" name="inputCari" class="form-control"
                                        placeholder="Cari disini...">
                                    <div class="input-group-append">
                                        <button type="submit" name="btnCari" class="btn btn-primary"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

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
@section('script')
    <script type="text/javascript">
        var input = "<?php echo $input; ?>";

        if (input == "") {

        } else {
            $('#sectionCari').show();
        }
    </script>
@endsection
