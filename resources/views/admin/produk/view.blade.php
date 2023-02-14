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

                <h1> VIEW PRODUK </h1>
                <hr class="animated zoomIn">
                <h4> ID </h4>
                <input type="text" class="form-control" value="{{ $selectDB[0]->id }}" disabled>


                <div class="row mt-3">
                    <div class="col-sm-6">
                        <h4 class=""> PATH GAMBAR </h4>
                        <input type="text" class="form-control" value=" {{ $selectDB[0]->gambar }} " disabled>
                    </div>
                    <div class="col-sm-6">
                        {{-- <img src="{{ asset('storage/' . $selectDB[0]->gambar) }}" class="form-control mt-3"
                            style="width: 30%;"> --}}
                        <button type="button" class="btn btn-warning form-control mt-4 pt-2 pb-2" id="lihatGambar"> LIHAT GAMBAR
                        </button>
                    </div>
                </div>

                <h4 class="mt-3"> JUDUL </h4>
                <input type="text" class="form-control" value="{{ $selectDB[0]->judul }}" disabled>
                <h4 class="mt-3"> SUMBER/PENULIS (html) </h4>
                <input type="text" class="form-control" value="{{ $selectDB[0]->sumberpenulis }}" disabled>
                <h4 class="mt-3"> ARTIKEL (html) </h4>
                <textarea type="text" cols="30" rows="10" class="form-control" disabled>{{ $selectDB[0]->deskripsi }}</textarea>
                <div class="row mt-5 text-center">
                    <div class="col-sm-6">
                        <h4> DIBUAT </h4>
                        <input type="text" class="form-control" value="{{ $selectDB[0]->created_at }}" disabled>
                    </div>
                    <div class="col-sm-6">
                        <h4> UPDATE TERAKHIR </h4>
                        <input type="text" class="form-control" value="{{ $selectDB[0]->updated_at }}" disabled>
                    </div>
                </div>
                <hr class="animated zoomIn">
                <div class="row">
                    <div class="col-sm-10">
                        <a href="/produk/admin#mulai" class="btn btn-danger ms-5">
                            << KEMBALI </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="/produk/{{ $selectDB[0]->id }}/edit/admin#mulai" class="btn btn-warning text-white"> EDIT DATA
                            INI >> </a>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            $('#lihatGambar').click(function() {

                Swal.fire({
                    imageUrl: '{{ asset("storage/".$selectDB[0]->gambar) }}',
                    imageWidth: 1000,
                    imageHeight: 500,
                    imageAlt: 'Custom image'
                })

            });

        });
    </script>
@endsection
