@extends('layouts.loginlayouts')
@section('content')
    <?php error_reporting(0); ?>

    <div class="container-xxl">
        <a href="/" class="btn btn-danger">
            << DASHBOARD</a>
                <div class="container py-5">

                    <div class="row justify-content-center">
                        <div class="col-md-6 bg-dark d-flex align-items-center" id="write-message">
                            <div class="p-5 animated flipInX" data-wow-delay="0.2s">
                                <h1 class="text-white text-center mb-4"> Login </h1>

                                <form method="POST" action="/login/proses/admin">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="username" id="username"
                                                    placeholder="Your Name">
                                                <label for="name">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="password" class="form-control" placeholder="Your Message"
                                                    name="password" id="password">
                                                <label for="message">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit" name="login"
                                                id="login"><span class="spinner-grow spinner-grow-sm" id="loadanim"
                                                    style="display: none;"></span> Log In</button>

                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        @if (session('alert') == 'passwordsalah')

            $('#username').val('{{ session('username') }}');

            Swal.fire({
                icon: 'error',
                title: 'Password tidak cocok!'
            })
        @elseif (session('alert') == 'datatidakcocok')

            $('#username').val('{{ session('username') }}');

            Swal.fire({
                icon: 'error',
                title: 'Tidak ada data yang cocok!'
            })
            @elseif (session('alert')  == "logindulu")

            Swal.fire({
                icon: 'warning',
                title: 'Silahkan login!'
            })
            @elseif (session('alert')  == "sesihabis")

            Swal.fire({
                icon: 'warning',
                title: 'Sesi anda telah berakhir!'
            })

        @endif
    </script>
@endsection
