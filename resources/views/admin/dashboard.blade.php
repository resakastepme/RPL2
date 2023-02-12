@extends('layouts.adminlayouts')

@section('top.dashboard')
    <div class="container-xxl py-5 bg-dark hero-header">
        <div class="container my-5 py-5">
            <div class="row align-items-center">
                <div class="col-lg text-center text-lg-center">
                    <h1 class="display-3 text-white animated slideInLeft">Selamat Datang SESSION !</h1>
                    <p class="text-white animated slideInLeft mb-5">
                        Gunakan tombol dibawah ini untuk navigasi ya!
                    </p>

                    <a href="#content">
                        <div class="row">
                            <div class="col-lg-2">
                                <button type="button" id="btnOrangtua" class="btn btn-primary"
                                    style="width: 90%; height: 100%; font-weight: bold;"> INFO <br> ORANG TUA </button>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" id="btnRemaja" class="btn btn-primary"
                                    style="width: 90%; height: 100%; font-weight: bold;"> INFO <br> REMAJA </button>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" id="btnPasangan" class="btn btn-primary"
                                    style="width: 90%; height: 100%; font-weight: bold;"> INFO <br> PASANGAN </button>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" id="btnProduk" class="btn btn-primary"
                                    style="width: 90%; height: 100%; font-weight: bold;"> PRODUK </button>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" id="btnKonsultasi" class="btn btn-primary"
                                    style="width: 90%; height: 100%; font-weight: bold;"> KONSULTASI </button>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" id="btnKAdmin" class="btn btn-success"
                                    style="width: 90%; height: 100%; font-weight: bold;"> KELOLA <br> ADMIN </button>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-xxl g-5">
        <div class="row">
            <div class="col">

                <section id="content" style="display: none;">

                    <h5> INFO_ORANG_TUA </h5>
                    <form method="POST" action="/uporangtua" enctype="multipart/form-data">
                        @csrf
                        <label for="img">GAMBAR :</label>
                        <input type="file" id="img" name="img" accept="image/*">

                        <label for="judul"> JUDUL : </label>
                        <input type="text" id="judul" name="judul">

                        <br>

                        <p class="mt-4"> ARTIKEL (html_entity_decode) ||
                            {{ $artikel = '<p style="">  </p> || <p style="font-weight: bold">  </p> || <p style="font-size: 10px">   </p> || <p style="color: red"> </p>' }}
                        </p>
                        {{-- <input type="text" name="artikel" style="width: 100%; height: 100%;"> --}}
                        <textarea name="artikel" id="artikel" cols="111" rows="19"></textarea>
                        <br>
                        <label for="sumberpenulis"> Sumber/Penulis (html_entity_decode): </label>
                        <input type="text" id="sumberpenulis" id="sumberpenulis" name="sumberpenulis"
                            style="width: 49%;"><br>
                        {{ $sumber = '<a href="https://" target="_blank">  </a>' }}
                        <br>
                        <button type="submit" class="btn btn-primary mt-3"> UPDATE </button>
                    </form>

                </section>

            </div>
        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript">

        $('#btnOrangtua').click(function () {

            // $.get("{{ url('create') }}", {}, function(data, status){

            //     $('#content').hide();
            //     $('#content').show();
            //     $('#content').html(data);
            // });

            $('#content').hide();
            $('#content').show();
        });

    </script>

@endsection
