@extends('layouts.adminlayouts')

@section('top.dashboard')
    <div class="container-xxl py-5 bg-dark hero-header3">

        <div class="container my-5 py-5">
            <div class="row align-items-center">
                <div class="col-lg text-center text-lg-center">
                    <h1 class="display-3 text-white animated zoomIn">Selamat Datang {{ session('nama') }} !</h1>
                    <p class="text-white animated zoomIn mb-5">
                        Gunakan tombol dibawah ini atau tombol pada menu untuk navigasi!
                    </p>

                        <div class="row animated fadeIn">
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
                                <button type="button" id="btnKelola" class="btn btn-success"
                                    style="width: 90%; height: 100%; font-weight: bold;"> KELOLA <br> ADMIN </button>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-xxl g-5">
        <div class="row">
            <div class="col">
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script type="text/javascript">

        $('#btnOrangtua').click( function () {
            window.location.href = "{{ url('/orangtua/admin') }}";
        });
        $('#btnRemaja').click( function () {
            window.location.href = "{{ url('/remaja/admin') }}";
        });
        $('#btnPasangam').click( function () {
            window.location.href = "{{ url('/pasangan/admin') }}";
        });
        $('#btnProduk').click( function () {
            window.location.href = "{{ url('/produk/admin') }}";
        });
        $('#btnKonsultasi').click( function () {
            window.location.href = "{{ url('/konsultasi/admin') }}";
        });
        $('#btnKelola').click( function () {
            window.location.href = "{{ url('/kelola/admin') }}";
        });

    </script>

@endsection
