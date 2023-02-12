<?php
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MANUAL INPUT</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Sweetalert 2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">

</head>

<body>

    <div class="container">
        <div class="row">

            <hr id="info_orang_tua">
            <h5> INFO_ORANG_TUA </h5>
            <form method="POST" action="/uporangtua" enctype="multipart/form-data">
                @csrf
                <label for="img">GAMBAR :</label>
                <input type="file" id="img" name="img" accept="image/*">

                <label for="judul"> JUDUL : </label>
                <input type="text" id="judul" name="judul">

                <br>

                <p class="mt-4"> ARTIKEL (html_entity_decode) || {{ $artikel = '<p style="">  </p> || <p style="font-weight: bold">  </p> || <p style="font-size: 10px">   </p> || <p style="color: red"> </p>' }} </p>
                {{-- <input type="text" name="artikel" style="width: 100%; height: 100%;"> --}}
                <textarea name="artikel" id="artikel" cols="111" rows="19"></textarea>
<br>
                <label for="sumberpenulis"> Sumber/Penulis (html_entity_decode): </label>
                <input type="text" id="sumberpenulis" id="sumberpenulis" name="sumberpenulis" style="width: 49%;"><br>
                {{ $sumber = '<a href="https://" target="_blank">  </a>' }}
<br>
                <button type="submit" class="btn btn-primary mt-3"> UPDATE </button>
            </form>

            <hr class="mt-5 mb-5">

            <h5 id="info_remaja"> INFO_REMAJA </h5>
            <form method="POST" action="/upremaja" enctype="multipart/form-data">
                @csrf
                <label for="img">GAMBAR :</label>
                <input type="file" id="img" name="img" accept="image/*">

                <label for="judul"> JUDUL : </label>
                <input type="text" id="judul" name="judul">

                <br>

                <p class="mt-4"> ARTIKEL (html_entity_decode) || {{ $artikel }} </p>
                {{-- <input type="text" name="artikel" style="width: 100%; height: 100%;"> --}}
                <textarea name="artikel" id="artikel" cols="111" rows="19"></textarea>
<br>
                <label for="sumberpenulis"> Sumber/Penulis (html_entity_decode): </label>
                <input type="text" id="sumberpenulis" id="sumberpenulis" name="sumberpenulis" style="width: 49%;">
                <p> {{ $sumber }} </p>
<br>
                <button type="submit" class="btn btn-primary"> UPDATE </button>
            </form>

            <hr class="mt-5 mb-5">

            <h5 id="info_pasangan"> INFO_PASANGAN </h5>
            <form method="POST" action="/uppasangan" enctype="multipart/form-data">
                @csrf
                <label for="img">GAMBAR :</label>
                <input type="file" id="img" name="img" accept="image/*">

                <label for="judul"> JUDUL : </label>
                <input type="text" id="judul" name="judul">

                <br>

                <p class="mt-4"> ARTIKEL (html_entity_decode) || {{ $artikel }} </p>
                {{-- <input type="text" name="artikel" style="width: 100%; height: 100%;"> --}}
                <textarea name="artikel" id="artikel" cols="111" rows="19"></textarea>
<br>
                <label for="sumberpenulis"> Sumber/Penulis (html_entity_decode): </label>
                <input type="text" id="sumberpenulis" id="sumberpenulis" name="sumberpenulis" style="width: 49%;">
                <p> {{ $sumber }} </p>
<br>
                <button type="submit" class="btn btn-primary"> UPDATE </button>
            </form>

            <hr class="mt-5 mb-5">

            <h5 id="produk"> PRODUK </h5>
            <form method="POST" action="/upproduk" enctype="multipart/form-data">
                @csrf
                <label for="img">GAMBAR :</label>
                <input type="file" id="img" name="img" accept="image/*">

                <label for="judul"> JUDUL : </label>
                <input type="text" id="judul" name="judul">

                <br>

                <p class="mt-4"> DESKRIPSI </p>
                {{-- <input type="text" name="artikel" style="width: 100%; height: 100%;"> --}}
                <textarea name="deskripsi" id="deskripsi" cols="111" rows="19"></textarea>

                <label for="sumberpenulis"> Sumber/Penulis (html_entity_decode): </label>
                <input type="text" id="sumberpenulis" id="sumberpenulis" name="sumberpenulis" style="width: 49%;">
                <p> {{ $sumber }} </p>
<br>
                <button type="submit" class="btn btn-primary"> UPDATE </button>
            </form>

            <hr class="mt-5 mb-5">
            <h5 id="konsultasi"> KONSULTASI </h5>
            <form method="POST" action="/upkonsultasi" enctype="multipart/form-data">
                @csrf
                <label for="img">GAMBAR :</label>
                <input type="file" id="img" name="img" accept="image/*">

                <label for="judul"> JUDUL : </label>
                <input type="text" id="judul" name="judul">

                <br>

                <p class="mt-4"> DESKRIPSI </p>
                {{-- <input type="text" name="deskripsi" style="width: 100%; height: 100%;"> --}}
                <textarea name="deskripsi" id="deskripsi" cols="111" rows="19"></textarea>

                <p class="mt-4"> GEJALA </p>
                {{-- <input type="text" name="gejala" style="width: 100%; height: 100%;"> --}}
                <textarea name="gejala" id="gejala" cols="50" rows="10"></textarea>
<br>
                <label for="sumberpenulis"> Sumber/Penulis (html_entity_decode): </label>
                <input type="text" id="sumberpenulis" id="sumberpenulis" name="sumberpenulis" style="width: 49%;">
                <p> {{ $sumber }} </p>
<br>
                <button type="submit" class="btn btn-primary"> UPDATE </button>
            </form>

            <hr class="mt-5 mb-5">
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>

    <!-- SWEETALERT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.min.js"
        integrity="sha512-vCI1Ba/Ob39YYPiWruLs4uHSA3QzxgHBcJNfFMRMJr832nT/2FBrwmMGQMwlD6Z/rAIIwZFX8vJJWDj7odXMaw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
