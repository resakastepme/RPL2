@extends('layouts.adminlayouts')
@section('top.dashboard')
    <div class="container-xxl py-5 bg-dark hero-header2">

        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg text-center text-lg-center">
                    <h1 class="display-3 text-white animated zoomIn">KELOLA KONSULTASI</h1>
                    <p class="text-white animated zoomIn mb-5">
                        Gunakan tombol pada menu untuk navigasi!
                    </p>
                </div>
            </div>
        </div>
        <section id="mulai"></section>
    </div>
@endsection

@section('content')
    <div class="container-xxl bg-light p-5">
        <div class="row">
            <div class="col-lg">

                <h1> FORM TAMBAH KONSULTASI </h1>
                <hr class="animated zoomIn">
                <form method="POST" action="/upkonsultasi" enctype="multipart/form-data">
                    @csrf
                    <h4 for="img">GAMBAR*</h4>
                        <input type="file" class="form-control" id="img" name="img" accept="image/*" style="width: 50%">

                    <h4 for="judul" class="mt-3"> JUDUL* </h4>
                    <input type="text" class="form-control" id="judul" name="judul" style="width: 50%">

                    <h4 for="judul" class="mt-3"> GEJALA* </h4>
                    <input type="text" class="form-control" id="gejala" name="gejala" style="width: 50%">

                    <h4 for="sumberpenulis" class="mt-3"> SUMBER* (html_entity_decode) </h4>
                    <input type="text" class="form-control" id="sumberpenulis" id="sumberpenulis" name="sumberpenulis" style="width: 50%;">

                    <h4 class="mt-3"> DESKRIPSI* (html_entity_decode) </h4>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" cols="111" rows="19"></textarea><br>

                    <div class="row">
                        <div class="col-sm-10">

                            <a href="{{ route('konsultasi') }}" class="btn btn-danger mt-3">
                                << KEMBALI </a>
                                    <button type="button" class="btn btn-primary mt-3" id="btnReset"> RESET </button>

                        </div>
                        <div class="col-sm-2">

                            <button type="submit" id="btnTambah" class="btn btn-success mt-3" style="width: 50%"> TAMBAH
                            </button>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#btnReset').click(function() {

                $('#img').val('');
                $('#judul').val('');
                $('#gejala').val('');
                $('#sumberpenulis').val('');
                $('#artikel').val('');

            });

            $('#btnTambah').click(function(e) {

                var gambar = $('#img').val();
                var judul = $('#judul').val();
                var gejala = $('#gejala').val();
                var sumberpenulis = $('#sumberpenulis').val();
                var deskripsi = $('#deskripsi').val();

                if (gambar && judul && gejala && sumberpenulis && deskripsi) {

                    let timerInterval
                    Swal.fire({
                        icon: 'success',
                        title: 'DATA BERHASIL DITAMBAH!',
                        html: 'Mengarahkan kembali...',
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    })

                } else {
                    e.preventDefault();
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Lengkapi semua form!'
                    });
                }

            });

        });
    </script>
@endsection
