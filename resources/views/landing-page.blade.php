<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>BUMDes Sumber Rezeki - Desa Bantan Sari</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">
    <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset('img/logo.png') }}" alt="Logo BUMDes Sumber Rezeki" class="me-3">
                <h1 class="sitename">Sumber Rezeki</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#beranda" class="active">Beranda</a></li>
                    <li><a href="#tentang">Sekilas BUMDes</a></li>
                    <li><a href="#struktur-organisasi">Struktur Organisasi</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ route('login') }}">Masuk</a>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="beranda" class="beranda section dark-background">
            <div id="beranda-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">
                <div class="carousel-item active">
                    <img src="{{ asset('img/carousel-11.jpg') }}" alt="">
                    <div class="carousel-container">
                        <h2 class="text-center">Badan Usaha Milik Desa (BUMDes) Sumber Rezeki<br></h2>
                        <a href="#tentang" class="btn-get-started">Mulai</a>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel-22.jpg') }}" alt="">
                    <div class="carousel-container">
                        <h2 class="text-center">Memberdayakan Masyarakat Desa</h2>
                        <p class="text-center">BUMDes Sumber Rezeki hadir sebagai wadah untuk meningkatkan kesejahteraan
                            warga melalui pengelolaan usaha milik desa secara transparan dan profesional.</p>
                        <a href="#struktur-organisasi" class="btn-get-started">Lihat Tim Kami</a>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <!-- Carousel Item 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('img/carousel-33.jpg') }}" alt="">
                    <div class="carousel-container">
                        <h2 class="text-center">Mewujudkan Desa Mandiri dan Produktif</h2>
                        <p class="text-center">Dengan semangat gotong royong, kami bergerak bersama untuk menciptakan
                            peluang kerja dan meningkatkan pendapatan masyarakat desa.</p>
                        <a href="#tentang" class="btn-get-started">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#beranda-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#beranda-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="tentang" class="tentang section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang</h2>
                <p>Sekilas BUMDes<br></p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            BUMDes Sumber Rezeki merupakan motor penggerak ekonomi desa yang dikelola secara profesional
                            oleh dan untuk masyarakat desa. Melalui unit-unit usaha yang inovatif, BUMDes menjadi solusi
                            dalam meningkatkan kesejahteraan bersama.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Mengelola potensi desa untuk menciptakan
                                    lapangan kerja.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Memberikan kontribusi nyata terhadap
                                    pendapatan asli desa.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Mendorong partisipasi warga dalam kegiatan
                                    ekonomi produktif.</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>BUMDes Sumber Rezeki berkomitmen membangun ekosistem ekonomi desa yang tangguh, mandiri, dan
                            berdaya saing. Setiap langkah yang kami ambil didasari oleh semangat kebersamaan,
                            akuntabilitas, dan inovasi demi masa depan desa yang lebih baik.</p>
                        <a href="#struktur-organisasi" class="read-more"><span>Lihat Anggota</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <section id="struktur-organisasi" class="struktur-organisasi section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>BUMDes Sumber Rezeki</h2>
                <p>Struktur Organisasi</p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="struktur-organisasi-member d-flex align-items-start">
                            {{-- <div class="pic"><img src="{{ asset('img/profile.png') }}" class="img-fluid"
                                    alt=""></div> --}}
                            <div class="member-info">
                                <h4>Gunondo</h4>
                                <span>Penaset (Pj. Kepala Desa)</span>
                                <p>Memimpin pemerintahan desa dan bertanggung jawab atas kebijakan pembangunan desa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="struktur-organisasi-member d-flex align-items-start">
                            {{-- <div class="pic"><img src="{{ asset('img/profile.png') }}" class="img-fluid"
                                    alt=""></div> --}}
                            <div class="member-info">
                                <h4>Metty Yusmasari</h4>
                                <span>Dewan Pengawas</span>
                                <p>Mengelola administrasi pemerintahan desa dan mendukung kinerja kepala desa.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="struktur-organisasi-member d-flex align-items-start">
                            {{-- <div class="pic"><img src="{{ asset('img/profile.png') }}" class="img-fluid"
                                    alt=""></div> --}}
                            <div class="member-info">
                                <h4>Hadi Sofyan</h4>
                                <span>Direktur BUMDes</span>
                                <p>Bertanggung jawab atas pengelolaan keuangan desa secara transparan dan akuntabel.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="struktur-organisasi-member d-flex align-items-start">
                            {{-- <div class="pic"><img src="{{ asset('img/profile.png') }}" class="img-fluid"
                                    alt=""></div> --}}
                            <div class="member-info">
                                <h4>Siti Muntamah</h4>
                                <span>Plt. Sekretaris & Bendahara</span>
                                <p>Mengelola dan mengembangkan unit usaha milik desa untuk meningkatkan ekonomi
                                    masyarakat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="struktur-organisasi-member d-flex align-items-start">
                            {{-- <div class="pic"><img src="{{ asset('img/profile.png') }}" class="img-fluid"
                                    alt=""></div> --}}
                            <div class="member-info">
                                <h4>Koordinator</h4>
                                <span>Unit Usaha Simpan Pinjam (Lestari)</span>
                                <ul class="mt-2">
                                    <li>Roziah</li>
                                    <li>Uswatun Khasanah</li>
                                    <li>Mas Kosim</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="struktur-organisasi-member d-flex align-items-start">
                            {{-- <div class="pic"><img src="{{ asset('img/profile.png') }}" class="img-fluid"
                                    alt=""></div> --}}
                            <div class="member-info">
                                <h4>Koordinator</h4>
                                <span>Unit Usaha Perdagangan dan Produksi</span>
                                <ul class="mt-2">
                                    <li>Nurhasanah Febri Haryani</li>
                                    <li>Siti Muntamah</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Member -->
                </div>
            </div>
        </section>
        <!-- /Team Section -->
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">BUMDes Sumber Rezeki</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Desa Bantan Sari</p>
                        <p>Jl. Damai, Bantan Sari, Kec. Bantan, Kab. Bengkalis</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>bumdes@bantansari.desa</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#tentang">Sekilas BUMDes</a></li>
                        <li><a href="#struktur-organisasi">Struktur Organisasi</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Desa</h4>
                    <ul>
                        <li><a href="#">Bantan Sari</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>BUMDes Sumber Rezeki</h4>
                    <img src="{{ asset('img/logo.png') }}" alt="Logo BUMDes Sumber Rezeki" width="40%">
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">BUMDes Sumber Rezeki</strong>
            </p>
            <div class="credits">
                2025, Designed by <a href="">Nurul Hafiza</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
