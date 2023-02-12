@extends('layouts.loginlayouts')
@section('content')
    {{-- <div class="container-xxl bg-dark d-flex">
    <div class="row">
        <div class="col-lg-12">
            TEST
        </div>
    </div>
</div> --}}

    <div class="container-xxl py-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 bg-dark d-flex align-items-center" id="write-message">
                    <div class="p-5 animated flipInX" data-wow-delay="0.2s">
                        <h1 class="text-white text-center mb-4"> Login </h1>

                        <form method="post" onsubmit="return false">
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

                                    <div class="text-center wow fadeIn" data-wow-delay="1.0s">
                                        <h5 class="section-title ff-secondary text-center text-primary fw-normal mt-4 mb-3">
                                            Tidak punya akun?</h5>
                                    </div>
                                    <button class="btn btn-success w-100 py-3" type="button" name="register"
                                        id="register">Kembali ke Home</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
