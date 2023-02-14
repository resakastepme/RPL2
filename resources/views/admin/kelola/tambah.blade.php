@extends('layouts.adminlayouts')
@section('top.dashboard')
    <div class="container-xxl py-5 bg-dark hero-header2">

        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg text-center text-lg-center">
                    <h1 class="display-3 text-white animated zoomIn">KELOLA ADMIN</h1>
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

                <h1> FORM TAMBAH ADMIN </h1>
                <hr class="animated zoomIn">
                <form method="POST" action="/kelola/tambah/proses/admin" id="form">
                    @csrf
                    <h4 for="img">NAMA*</h4>
                    <input type="text" class="form-control" id="nama" name="nama" style="width: 50%">

                    <h4 for="judul" class="mt-3"> USERNAME* </h4>
                    <input type="text" class="form-control" id="username" name="username" style="width: 50%">

                    <h4 for="judul" class="mt-3"> PASSWORD* </h4>
                    <input type="password" class="form-control" id="password" name="password" style="width: 50%">

                    <h4 for="judul" class="mt-3"> ULANGI PASSWORD* </h4>
                    <input type="password" class="form-control" id="ulangi" name="ulangi" style="width: 50%">

                    <div class="row">
                        <div class="col-sm-4">

                            <a href="{{ url('/kelola/admin#mulai') }}" class="btn btn-danger mt-3">
                                << KEMBALI </a>
                                    <button type="button" class="btn btn-primary mt-3" id="btnReset"> RESET </button>

                        </div>
                        <div class="col-sm-8">

                            <button type="submit" id="btnTambah" class="btn btn-success mt-3" style="width: 24%"> TAMBAH
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

                $('#nama').val('');
                $('#username').val('');
                $('#password').val('');
                $('#ulangi').val('');

            });

            $('#btnTambah').click(function(e) {

                e.preventDefault();

                var nama = $('#nama').val();
                var username = $('#username').val();
                var password = $('#password').val();
                var ulangi = $('#ulangi').val();

                if (nama && username && password && ulangi) {
                    if (password == ulangi) {

                        Swal.fire({
                            icon: 'question',
                            title: 'Anda yakin akan menambahkan akun baru?',
                            showCancelButton: true,
                            confirmButtonText: 'Ya',
                            cancelButtonText: 'Batal'
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                $('#form').submit();
                            }
                        })

                    } else {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'Password tidak sama!'
                        });

                    }
                } else {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Lengkapi form!'
                    });

                }

            });

        });
    </script>
@endsection
