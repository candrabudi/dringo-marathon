<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Maraton Atas Awan Dieng 10 K - Serayunews</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo-etawalin.png') }}" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>
    @include('sweetalert::alert')
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="{{ asset('assets/images/logo/logo-etawalin.png') }}" style="width: 100px;" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/" aria-label="Toggle navigation">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about" aria-label="Toggle navigation">Tentang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#route" aria-label="Toggle navigation">Rute</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sponsor" aria-label="Toggle navigation">Sponsor</a>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                                <div class="button-login">
                                    <a href="{{route('login')}}" target="_blank" class="btn">Login</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero-area">
        <div class="main__circle"></div>
        <div class="main__circle2"></div>
        <div class="main__circle3"></div>
        <div class="main__circle4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="hero-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Maraton Atas Awan Dieng 10 K</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Pelaksanaan lomba dilakukan pada, Minggu 29 Oktober 2023</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="{{route('register')}}" class="btn ">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="count-down">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box-head">
                        <div class="box-content">
                            <div class="box">
                                <h1 id="days">000</h1>
                                <h2 id="daystxt">Days</h2>
                            </div>
                            <div class="box">
                                <h1 id="hours">00</h1>
                                <h2 id="hourstxt">Hours</h2>
                            </div>
                            <div class="box">
                                <h1 id="minutes">00</h1>
                                <h2 id="minutestxt">Minutes</h2>
                            </div>
                            <div class="box">
                                <h1 id="seconds">00</h1>
                                <h2 id="secondstxt">Secondes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features section mt-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Tentang Pendaftaran ?</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Pendaftaran Peserta</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Pendaftaran akan dimulai pada tanggal 15 September - 20 Oktober 2023 </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-featuer">
                        <img class="shape" src="{{ asset('assets/images/features/shape.svg') }}" alt="#">
                        <img class="shape2" src="{{ asset('assets/images/features/shape2.svg') }}" alt="#">
                        <span class="serial">01</span>
                        <div class="service-icon">
                            <i class="lni lni-files"></i>
                        </div>
                        <h3>Biaya Pendaftaran</h3>
                        <p>Biaya pendaftaran untuk kategori Pelajar sebesar Rp 100.000,- dan biaya pendaftaran Kategori Umum sebesar Rp 150.000,-</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-featuer">
                        <img class="shape" src="{{ asset('assets/images/features/shape.svg') }}" alt="#">
                        <img class="shape2" src="{{ asset('assets/images/features/shape2.svg') }}" alt="#">
                        <span class="serial">02</span>
                        <div class="service-icon">
                            <i class="lni lni-clipboard"></i>
                        </div>
                        <h3>Bonus Spesial</h3>
                        <p>Setiap peserta yang mendaftar lebih awal mendapatkan fasilitas kaos dan Medali DIENG 10 K MARATON ATAS AWAN 2023.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-featuer">
                        <img class="shape" src="{{ asset('assets/images/features/shape.svg') }}" alt="#">
                        <img class="shape2" src="{{ asset('assets/images/features/shape2.svg') }}" alt="#">
                        <span class="serial">03</span>
                        <div class="service-icon">
                            <i class="lni lni-medal-8">
                            <img src="assets/images/icon/medal.png" style="width: 40px;margin-top: -5px;"  alt="">
                            </i>
                          
                        </div>
                        <h3>Total Hadiah!</h3>
                        <p>Total hadiah untuk pelaksanaan perlombaan Maraton Atas Awan Dieng 10K sebesar 100 Juta Rupuah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section" id="route">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12 wow fadeIn" data-wow-delay=".4s">
                    <div class="about-image">
                        <img src="{{ asset('assets/images/route/route.png') }}" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-12 wow fadeIn" data-wow-delay=".6s">
                    <div class="content">
                        <h4>Latar Belakang</h4>
                        <h2>Dringo Marathon</h2>
                        <p>
                            Lari maraton adalah kegiatan olahraga yang banyak digemari oleh seluruh kalangan, saat ini olahraga lari menjadi satu trend serta sangat polular.
                        </p>
                        <p>
                            Dengan memadukan olahraga dan rekreasi atau Sport Tourism, serta memeriahkan Hari Sumpah Pemuda tahun 2023, kami Serayunews bersama dengan Kodim 0704 Banjarnegara dan KONI Banjarnegara menggagas Loma Lari wisata bertajuk Sport Tourism DIENG 10 K MARATON ATAS AWAN sebagai upaya untuk meningkatkan prestasi dan perkembangan pariwisata di Banjarnegara, serta upaya membangkitkan perekonomian masyarakt desa wisata.
                        </p>
                        <p>
                            Keunikan dan Kekhasan alam dataran tinggi Dieng akan menjadi Nilai dan Daya Tarik bagi Wisatawan untuk dapat berolahraga sambal menikmati sejuknya udara Dieng dan melihat Potensi Wisata wisata alam yang ada di Kabupaten Banjarnegara.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sponsors section" id="sponsor">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Sponsors</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Sponsor Resmi Kami</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Sponsor Dringo Marathon adalah pihak-pihak atau perusahaan yang memberikan dukungan finansial dan berbagai bentuk sponsor untuk mendukung pelaksanaan Dringo Marathon, sebuah acara lari.</p>
                    </div>
                </div>
            </div>
            <div class="row gx">
                <div class="col">
                    <a href="javascript:void(0)" class="single-sponsor">
                        <img src="{{ asset('assets/images/logo/logo-sponsor-01.png') }}" alt="#">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Faq</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Bantuan Pendaftaran</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Masih bingung cara daftarnya ? dibawah ini ada langkah-langkah pendaftaran.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mt-3">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <span class="title">Bagaimana cara daftarnya ?</span>
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>kamu bisa mengisi form diatas, lebih tepatnya setelah countdown, dengan mengisi beberapa biodata diri untuk melakukan pendaftaran</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-3">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <span class="title">Apa yang harus dilakukan setelah mendaftar ?</span>
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>kamu bisa pergi ke halaman login, ada beberapa tombol login yang bisa kamu gunakan untuk masuk dan melakukan pembayaran
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-3">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <span class="title">Setelah melakukan pembayaran apa yang harus saya lakukan ?</span>
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Setelah pembayaran kamu bisa screenshoot, download atau print invoice, dan tunjukan kepada panitia bahwa kamu sudah mendaftar dan bisa mengambil beberapa merchant dari panitia </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="call-action overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="inner-content">
                        <div class="text">
                            <h5 class="wow zoomIn" data-wow-delay=".2s">Hurry Up!</h5>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Bergabunglah di Dieng Maraton dan Lari Bersama!
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Pendaftaran Mulai Tanggal 15 September - 20 Oktober 2023</p>
                            <p class="wow fadeInUp" data-wow-delay=".6s">mengajak masyarakt untuk ambil bagian dalam acara Dringo Marathon yang tidak hanya tentang lari, tetapi juga tentang mengambil tindakan untuk menjaga kesehatan dan kebugaran.</p>
                        </div>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="{{route('register')}}" class="btn">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-5">
        <di class="copyright">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-12">
                            <p class="copyright-text"><a href="https://serayunews.com/" rel="nofollow" target="_blank">Serayunews</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </di>
    </footer>

    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=Gxw45q3Ga3k',
            'type': 'video',
            'source': 'youtube',
            'width': 900,
            'autoplayVideos': true,
        });

        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });
    </script>
    <script>
        const finaleDate = new Date("October 29, 2023 00:00:00").getTime();

        const timer = () => {
            const now = new Date().getTime();
            let diff = finaleDate - now;

            if (diff <= 0) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.container').style.display = 'none';
            } else {
                let days = Math.floor(diff / (1000 * 60 * 60 * 24));
                let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((diff % (1000 * 60)) / 1000);

                days = days < 100 ? (days < 10 ? `00${days}` : `0${days}`) : days;
                hours = hours < 10 ? `0${hours}` : hours;
                minutes = minutes < 10 ? `0${minutes}` : minutes;
                seconds = seconds < 10 ? `0${seconds}` : seconds;

                document.querySelector('#days').textContent = days;
                document.querySelector('#hours').textContent = hours;
                document.querySelector('#minutes').textContent = minutes;
                document.querySelector('#seconds').textContent = seconds;
            }
        }

        timer();
        setInterval(timer, 1000);
    </script>

</body>

</html>