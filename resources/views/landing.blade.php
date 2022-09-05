@extends('layout.source')
@section('content')
<title>beranda</title>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="/">Paud Teratai</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="active" href="#">Beranda</a></li>
                <li><a href="about">Tentang</a></li>
                <li><a href="contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="{{ route('login') }}" class="get-started-btn">Masuk</a>
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Ayo Bermain,<br>dan Belajar</h1>
        <h2>"Pendidikan adalah senjata terkuat yang bisa kau gunakan untuk merubah dunia"</h2>
        <a data-bs-toggle="modal" href="#masuk" class="btn-get-started">Masuk</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/landing/img/hero-bg.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h1>VISI & MISI.</h1>
                    <p class="fst-italic">
                    <h4>VISI.</h4>
                    </p>
                    <ul>
                        <li>
                            <h4><i class="bi bi-check-circle"></i>
                                Terwujudnya anak anak yang cerdas, sehat dan berakhlak mulia serta taqwa.</h4>
                        </li>
                    </ul>
                    <p class="fst-italic">
                    <h4>MISI</h4>
                    </p>
                    <ul>
                        <li>
                            <h4><i class="bi bi-check-circle"></i>
                                memberikan pengasuhan layanan pendidikan anak usia dini.</h4>
                        </li>
                        <li>
                            <h4><i class="bi bi-check-circle"></i>
                                membentuk karakter dan kepribadian serta mandiri.</h4>
                        </li>
                        <li>
                            <h4><i class="bi bi-check-circle"></i>
                                memahami diri sendiri , orang lain dan lingkungan.</h4>
                        </li>
                        <li>
                            <h4><i class="bi bi-check-circle"></i>
                                meningkatkan kesadaran dan partisipasi masyarakat terhadap pelayanan .</h4>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Alamat</h3>
                    <p>
                        Jl. Cilandak No.148-8 <br>
                        Sarijadi, Kec. Sukasari<br>
                        Kota Bandung, Jawa Barat 40151 <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>PaudTeratai</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<script>
const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
</script>
@endsection