<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK LAMPU</title>
    <link rel="icon" type="image/png" href="{{ asset('lampu.png') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets1/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/owl.carousel/assets1/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets1/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="#">DeLaSys</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="/home"><img src="assets1/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12" data-aos="fade-up">
                            <img src="assets1/img/lamp.svg" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-12 mt-2" data-aos="fade-down" data-aos-delay="500">
                            <h2 class="animate__animated animate__fadeInDown">Selamat datang di <span> Delasys</span>
                            </h2>
                            <p class="animate__animated fanimate__adeInUp">Membantu memilih lampu sesuai kebutuhan Anda
                            </p>
                        </div>
                    </div>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->
    <section id="about" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Servis</h2>
                <p>Fitur Utama DeLaSys</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4 mb-lg-0">
                    <div class="icon-box">
                        <h4><a href="">Analisis Komprehensif</a></h4>
                        <p>Memberikan analisis mendalam untuk setiap pilihan lampu</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4 mb-lg-0">
                    <div class="icon-box">

                        <h4><a href="">Rekomendasi Optimal</a></h4>
                        <p>Rekomendasi lampu terbaik berdasarkan preferensi dan kebutuhan Anda</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">

                        <h4><a href="">Ramah Lingkungan</a></h4>
                        <p>Memprioritaskan lampu dengan efisiensi energi tinggi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-out">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3>Coba Sekarang ?</h3>
                    <p>Lakukan uji coba sistem pendukung keputusan dalam pemilihan lampu hasil kalkulasi menggunakan
                        metode AHP</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="{{ route('customer.kriteria') }}">Try It Now !</a>
                </div>
            </div>
        </div>
    </section>


    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>FAQ</h2>
                <p>Pertanyaan yang Sering Diajukan</p>
            </div>
            <ul class="faq-list">
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq1">Apa itu DeLaSys? <i
                            class="icofont-simple-up"></i></a>
                    <div id="faq1" class="collapse" data-parent=".faq-list">
                        <p>
                            DeLaSys adalah Sistem Pendukung Keputusan Pemilihan Lampu yang membantu Anda memilih lampu
                            terbaik berdasarkan berbagai parameter.
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq2">Bagaimana cara kerja DeLaSys? <i
                            class="icofont-simple-up"></i></a>
                    <div id="faq2" class="collapse" data-parent=".faq-list">
                        <p>
                            DeLaSys menganalisis data terkini dan preferensi Anda untuk memberikan rekomendasi lampu
                            yang optimal.
                        </p>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq3">Apakah DeLaSys gratis? <i
                            class="icofont-simple-up"></i></a>
                    <div id="faq3" class="collapse" data-parent=".faq-list">
                        <p>
                            Ya, DeLaSys dapat digunakan secara gratis oleh semua pengguna.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <footer id="footer" class="full-width-footer">
        <div class="container">
            <div class="copyright">
                &copy; Hak Cipta <strong><span>DeLaSys</span></strong>. Semua Hak Dilindungi.
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('assets1/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets1/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets1/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets1/js/main.js') }}"></script>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

</body>

</html>
