<?php
    if (session('nama')) {
    } else {
        return redirect()->to('/login/admin')->with('alert', 'logindulu')->send();
    }

    if (time() - session('attempt') > 300) {
        session()->pull('nama');
        session()->pull('attempt');

        return redirect()->to('/login/admin')->with('alert', 'sesihabis')->send();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SexDu Project</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <div class="container-xxl bg-white p-0">

        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        {{-- <div id="main navbar"> --}}
        <div class="container-xxl p-0">
            <nav class="navbar navbar-expand-lg navbar-dark2 navbar-color px-4 px-lg-5 py-3 py-lg-0">

                <!-- Use any element to open the sidenav -->
                <span class="me-2 btn btn-color" onclick="openNav()" id="sideNavOpen" style="display: none;"><i
                        class="fa fa-bars"></i></span>
                <!-- Use any element to close the sidenav -->
                <span class="me-2 btn btn-color" onclick="closeNav()" id="sideNavClose" style="display: none;"><i
                        class="fa fa-bars"></i></span>

                <a href="/" class="navbar p-2">
                    <h1 class="color-txt m-0"><i class="fa fa-transgender me-3"></i>SexDu Project</h1>
                </a>

                <div class="navbar-nav ms-auto" id="navbarCollapse">
                    <p class="mt-4 me-4 text-white" style="font-weight: bold;"> hy, {{ session('nama') }}! </p>
                    <a href="/logout/admin" class="btn btn-danger mt-3" style="font-weight: bold; height: 10%;"> Logout
                    </a>
                </div>

            </nav>

        </div>
        {{-- </div> --}}
        <!-- Navbar & Hero End -->

        @yield('top.dashboard')

    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
        <a href="/dashboard/admin"><i class="fa fa-circle" style="font-size: 15px"></i> DASHBOARD</a>
        <a href="/orangtua/admin"><i class="fa fa-circle" style="font-size: 15px"></i> INFO ORANG TUA</a>
        <a href="/remaja/admin"><i class="fa fa-circle" style="font-size: 15px"></i> INFO REMAJA</a>
        <a href="/pasangan/admin"><i class="fa fa-circle" style="font-size: 15px"></i> INFO PASANGAN</a>
        <a href="/produk/admin"><i class="fa fa-circle" style="font-size: 15px"></i> PRODUK</a>
        <a href="/konsultasi/admin"><i class="fa fa-circle" style="font-size: 15px"></i> KONSULTASI</a>
        <a href="/kelola/admin"><i class="fa fa-circle" style="font-size: 15px"></i> KELOLA ADMIN</a>

    </div>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">

        @yield('content')

    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-footer text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row text-center">
                <p class="text-white animated zommIn"> Made with 🔥 by us. </a>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js"
        integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
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
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.1/sweetalert2.min.js" integrity="sha512-vCI1Ba/Ob39YYPiWruLs4uHSA3QzxgHBcJNfFMRMJr832nT/2FBrwmMGQMwlD6Z/rAIIwZFX8vJJWDj7odXMaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }

        $(document).ready(function() {

            $('#sideNavOpen').show();

            $('#sideNavOpen').click(function() {

                $(this).hide();
                $('#sideNavClose').show();

            });

            $('#sideNavClose').click(function() {

                $(this).hide();
                $('#sideNavOpen').show();

            });

        });
    </script>

    @yield('script')

</body>

</html>
