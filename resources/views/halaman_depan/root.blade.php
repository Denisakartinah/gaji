@if (Session::has('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire(
                'Sukses',
                '{{ Session::get('success') }}',
                'success'
            );
        });
    </script>
@endif
@if (Session::has('error'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire(
                'Error',
                '{{ Session::get('error') }}',
                'error'
            );
        });
    </script>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Slip Gaji</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Favicons -->
    <link href="{{ asset('vesperr-2/assets/img/logo_pa.png') }}" rel="icon">
    <link href="{{ asset('vesperr-2/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vesperr-2/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr-2/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr-2/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr-2/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr-2/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr-2/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vesperr-2/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('vesperr-2/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="/"><span style="color: #1b511b;">Pengadilan Agama</span></a></h1>
                <!-- Untuk image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                
                <li class="get-started"><a href="{{ url('/sesi') }}" style="background-color: #1b511b;">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" style="font-size: 42px; color: #1b511b;">Penggajian Pegawai</h1>
                <h2 data-aos="fade-up" data-aos-delay="400" style="font-size: 18px;">Selamat Datang Di Website Sistem Informasi Penggajian Pegawai Pengadilan Agama Soreang</h2>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="400" style="margin-left: -20px;">
                <img src="{{ asset('vesperr-2/assets/img/card.png') }}" class="img-fluid animated" style="width: 500px; height: auto;" alt=""> <!-- Ukuran gambar lebih besar dan geser kiri -->
            </div>
        </div>
    </div>    

    
</section><!-- End Hero -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>Pengadilan Agama</strong> All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by DD
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('vesperr-2/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vesperr-2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vesperr-2/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vesperr-2/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vesperr-2/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vesperr-2/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('vesperr-2/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vesperr-2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vesperr-2/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vesperr-2/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('vesperr-2/assets/js/main.js') }}"></script>

</body>

</html>
