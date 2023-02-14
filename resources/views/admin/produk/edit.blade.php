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
                </div>
            </div>
        </div>
        <section id="mulai"></section>
    </div>
@endsection

@section('content')
    <div class="container-xxl p-5">
        <div class="row">
            <div class="col-lg">

                <form action="{{ route('edit.proses.produk', $selectDB[0]->id) }}" enctype="multipart/form-data" method="POST" id="form">
                    @csrf

                    <h1> EDIT PRODUK </h1>
                    <hr class="animated zoomIn">
                    <h4> ID <span style="color: red">(X)</span></h4>
                    <input type="text" class="form-control" value="{{ $selectDB[0]->id }}" disabled>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <h4 class=""> PATH GAMBAR <span style="color: red">(X)</span> </h4>
                            <input type="text" class="form-control" value=" {{ $selectDB[0]->gambar }} " disabled>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-warning form-control mt-4 pt-2 pb-2" id="btnUpload"
                                style="display: show;"> GAMBAR BARU? </button>
                            <section class="animated fadeIn" id="uploadGambar" style="display: none;">
                                <h4> GAMBAR BARU </h4>
                                <input type="file" class="form-control" id="img" name="img" accept="image/*">
                            </section>
                        </div>
                    </div>

                    <h4 class="mt-3"> JUDUL* </h4>
                    <input type="text" class="form-control" value="{{ $selectDB[0]->judul }}" name="judul"
                        id="judul">
                    <h4 class="mt-3"> SUMBER/PENULIS* (html) </h4>
                    <input type="text" class="form-control" value="{{ $selectDB[0]->sumberpenulis }}"
                        name="sumberpenulis" id="sumberpenulis">
                    <h4 class="mt-3"> DESKRIPSI* (html) </h4>
                    <textarea type="text" cols="30" rows="10" class="form-control" name="deskripsi" id="deskripsi">{{ $selectDB[0]->deskripsi }}</textarea>
                    <div class="row mt-5 text-center">
                        <div class="col-sm-6">
                            <h4> DIBUAT <span style="color: red">(X)</span> </h4>
                            <input type="text" class="form-control" value="{{ $selectDB[0]->created_at }}" disabled>
                        </div>
                        <div class="col-sm-6">
                            <h4> UPDATE TERAKHIR <span style="color: red">(X)</span> </h4>
                            <input type="text" class="form-control" value="{{ $selectDB[0]->updated_at }}" disabled>
                        </div>
                    </div>

                    <p class="mt-5"> ** <span style="color: red">(X)</span> menandakan data tidak valid jika di edit atau
                        data akan teredit secara otomatis. </p>
                    <hr class="animated zoomIn">
                    <div class="row">
                        <div class="col-sm-10">
                            <a href="/produk/admin#mulai" class="btn btn-danger ms-5">
                                << KEMBALI </a>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-success text-white" style="width: 70%" id="btnUpdate"> UPDATE </button>
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

            $('#btnUpload').show();

            $('#btnUpload').click(function() {

                $(this).hide();
                $('#uploadGambar').show();

            });

        });

        $('#btnUpdate').click(function(e) {

            e.preventDefault();

            Swal.fire({
                icon: 'question',
                title: 'Anda yakin ingin menyimpan perubahan?',
                showCancelButton: true,
                confirmButtonText: 'Simpan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $('#form').submit();
                }
            })

        });
    </script>
@endsection
