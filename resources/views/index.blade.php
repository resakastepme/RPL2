@extends('layouts.mainlayouts')

@section('top.dashboard')
    <div class="container-xxl py-5 bg-dark hero-header">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Selamat Datang Di,<br>SexDu Project</h1>
                    <p class="text-white animated slideInLeft mb-4 pb-2">Platform ini menyediakan konten mengenai Seks
                        Edukasi
                        untuk menambah wawasan anda dan mencegah hal-hal
                        yang tidak diinginkan</p>
                    <a href="#mulai_section" id="mulai"
                        class="btn btn-color py-sm-3 px-sm-5 me-3 animated slideInLeft">Mulai</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid rounded-circle" src="img/spinninglogo.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-xxl bg-info py-5" id="mulai_section">
        <div class="container">
            <div class="row">

                <div class="col">
                    <h1 class="wow fadeInUp text-white mt-3 mb-5" data-wow-delay="0.5s"> INFO SEXDU </h1>
                    <p class="text-white animated fadeInDown mb-4 pb-2">
                        Berbagai macam artikel menarik dan menambah wawasan, Kami sediakan disini! <br>
                        Mulai dari artikel untuk Orang Dewasa hingga Anak-anak! <br>
                        ~ <br>
                        Mulai membaca dengan klik topik artikel dibawah ini ya!
                    </p>
                    <div class="input-group">
                        <a href="/orangtua" class="btn btn-color py-sm-3 px-sm-5 me-3 wow bounceIn"
                            data-wow-delay="1.4s">Orang Tua</a>
                        <div class="input-group-append">
                            <a href="/remaja" class="btn btn-color py-sm-3 px-sm-5 me-3 wow bounceIn"
                                data-wow-delay="1.1s">Remaja</a>
                        </div>
                        <div class="input-group-append">
                            <a href="/pasangan" class="btn btn-color py-sm-3 px-sm-5 me-3 wow bounceIn"
                                data-wow-delay="0.5s">Pasangan</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-produk">
        <div class="container">
            <div class="row g-4">

                <div class="col">
                    <h1 class="text-white wow fadeInUp mb-5" data-wow-delay="0.7s"> PRODUK </h1>
                    <p class="text-white animated fadeInDown mb-4 pb-2">Produk rekomendasi dari SexDu untuk "keamanan"
                        anda.
                        Untuk kalian yang kebingungan dengan produk-produk di dunia SexDu <br>
                        Kami menyediakan berbagai macam rekomendasi produk untuk mu! <br>
                        ~ <br>
                        Klik tombol di bawah ya!
                    </p>
                    <a href="/produk" class="btn btn-color py-sm-3 px-sm-5 me-3 animated bounceIn">KLIK DISINI</a>
                    <p class="mt-2 wow fadeInDown" data-wow-delay="1.5s" style="color: red; font-size: 10px;"> ** perlu di
                        ingat bahwa semua produk hanya rekomendasi, <br> bukan produk resmi dari kami </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-konsul">
        <div class="container">
            <div class="row g-4">

                <div class="col">
                    <h1 class="text-white wow fadeInUp mb-5" data-wow-delay="0.9s"> KONSULTASI </h1>
                    <p class="text-white animated fadeInDown mb-4 pb-2">
                        Masih bingung dengan dunia SexDu? <br>
                        Atau mungkin ada pertanyaan yang belum terjawab? <br>
                        Temukan jawaban nya di Konsultasi! <br>
                        Kami menyediakan berbagai macam masalah beserta dengan solusinya! <br>
                        ~ <br>
                        Klik tombol di bawah ya!
                    </p>
                    <a href="/konsultasi" class="btn btn-color py-sm-3 px-sm-5 me-3 animated bounceIn">KLIK DISINI</a>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        Swal.fire({
            icon: 'info',
            title: 'Dengan klik tombol "Lanjutkan" anda sudah berumur 13+',
            allowOutsideClick: false,
            showDenyButton: true,
            confirmButtonText: 'Lanjutkan',
            denyButtonText: `Saya belum 13+`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                let timerInterval
                Swal.fire({
                    title: 'Anda menyatakan sudah 13+',
                    html: 'Selamat datang!',
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
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                    }
                })
            } else if (result.isDenied) {
                let timerInterval
                Swal.fire({
                    title: 'Website ini hanya untuk 13+',
                    html: 'Mengarahkan ke Google...',
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
                        window.location.href = 'https://www.google.com/';
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                    }
                })
            }
        })
    </script>
@endsection
