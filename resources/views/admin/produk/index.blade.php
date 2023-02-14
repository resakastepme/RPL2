@extends('layouts.adminlayouts')
@section('top.dashboard')
    <div class="container-xxl py-5 bg-dark hero-header2">

        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg text-center text-lg-center">
                    <h1 class="display-3 text-white animated zoomIn">KELOLA PRODUK</h1>
                    <p class="text-white animated zoomIn mb-5">
                        Gunakan tombol pada menu untuk navigasi!
                    </p>
                    <a href="#mulai"><button type="button" class="btn btn-color" style="height: 100%;">MULAI</button></a>
                </div>
            </div>
            <section id="mulai"></section>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-xxl bg-light p-5">
        <h2> PRODUK </h2>

        <div class="row">
            <div class="col-md-8">
                <a href="{{ url('/tambah/produk/admin#mulai') }}">
                    <button type="button" class="btn btn-success mb-2" name="btnTambah" id="btnTambah"> + Tambah Data
                    </button>
                </a>
            </div>
            <div class="col-md-2">
                <div class="input-group">
                    <input type="text" placeholder="Cari data..." id="searchInput">
                </div>
            </div>
        </div>

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Path Gambar</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Sumber</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="theTable">
                <meta name="csrf-token" content="{{ csrf_token() }}">

                @foreach ($selectDB as $DATA)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ substr($DATA->gambar, 0, 25) }}...</td>
                        <td>{{ substr($DATA->judul, 0, 10) }}...</td>
                        <td>{{ substr($DATA->deskripsi, 0, 25) }}...</td>
                        <td>{{ substr($DATA->sumberpenulis, 0, 25) }}...</td>
                        <td>

                            <div class="input-group">
                                <a href="/produk/{{ $DATA->id }}/view/admin#mulai"> <button type="button"
                                        class="btn btn-success" name="btnView" id="btnView"> <i class="fa fa-eye"></i>
                                    </button></a>
                                <div class="input-group-append ms-1">
                                    <a href="/produk/{{ $DATA->id }}/edit/admin#mulai"><button type="button"
                                            class="btn btn-warning" name="btnEdit" id="btnEdit"> <i class="fa fa-pen"></i>
                                        </button></a>
                                </div>
                                <div class="input-group-append ms-1">
                                    <a href="/produk/{{ $DATA->id }}/hapus/proses/admin#mulai" name="btnHapus"
                                        id="btnHapus" data-id="{{ $DATA->id }}"
                                        data-judul="{{ $DATA->judul }}"><button type="button" class="btn btn-danger"> <i
                                                class="fa fa-trash"></i> </button></a>
                                </div>
                            </div>
                            <input type="hidden" name="id" id="id" value="{{ $DATA->id }}">

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#theTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

            @if (session('alert') == 'terhapus')

                let timerInterval
                Swal.fire({
                    icon: 'success',
                    title: 'DATA BERHASIL DI HAPUS!',
                    timer: 2000,
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

            @elseif (session('alert') == 'gagalhapus')

            let timerInterval
                Swal.fire({
                    icon: 'error',
                    title: 'DATA GAGAL DI HAPUS!',
                    timer: 2000,
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

            @endif

            @if (session('alert') == 'updated')

                let timerInterval
                Swal.fire({
                    icon: 'success',
                    title: 'DATA BERHASIL DI EDIT!',
                    timer: 2000,
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

            @elseif (session('alert') == 'gaupdated')

            let timerInterval
                Swal.fire({
                    icon: 'error',
                    title: 'DATA GAGAL DI EDIT!',
                    timer: 2000,
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

            @endif

        });

        $(document).on('click', '#btnHapus', function(e) {

            e.preventDefault();

            var id = $(this).data('id');
            var judul = $(this).data('judul');

            Swal.fire({
                icon: 'warning',
                title: 'Anda yakin ingin menghapus data dengan judul "' + judul + '"?',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "/produk/" + id + "/hapus/proses/admin#mulai";
                }
            })

        });
    </script>
@endsection
