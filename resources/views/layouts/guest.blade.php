<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description">
        <meta content="sdev, silasdev, silasmas, développement, web, mobile, community, manager" name="keywords">
      
        <!-- Favicon -->
        <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <!-- Vendor CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/aos/aos.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">

        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i">

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">

        <!-- Template Main CSS File -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

        <title>Silas Développe</title>
    </head>

    <body>
        <!-- ======= Mobile nav toggle button ======= -->
        <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
        <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex flex-column justify-content-center">
            <nav id="navbar" class="navbar nav-menu">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bi bi-question-circle"></i> <span>A propos</span></a></li>
                    <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </header><!-- End Header -->

@yield('guest-content')

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <p class="mb-3"><img src="{{ asset('assets/img/logo-bg.png') }}" alt="" class="rounded-circle" width="100"></p>

                <div class="row">
                    <div class="col-lg-6 col-lg-8 col-12 mx-auto">
                        <h3>Silas développe</h3>
                        <p>
                            Nous vous offrons des solutions informatiques, des accompagnements et conseil en stratégie marketing digitale et assure la couverture médiatique des évènements de tout genre.
                        </p>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                </div>

                <div class="copyright">
                    &copy; Copyright <strong><span>SDEV</span></strong>. Tous droits réservés
                </div>

                <div class="credits">
                    Designed by <a href="https://www.linkedin.com/in/xanders-samoth-b2770737/">Xanders Samoth</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/jquery/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
        <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/vendor/autosize/js/autosize.min.js') }}"></script>

        <!-- Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <script type="text/javascript">
            autosize($('textarea'));
        </script>
    </body>
</html>
