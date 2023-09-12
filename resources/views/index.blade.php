<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Dringo Marathon - Serayunes</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

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
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo/logo-serayu.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="index.html" aria-label="Toggle navigation">Beranda</a>
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
                                </ul>
                            </div>
                            <div class="button">
                                <a href="https://wa.me/6281229606746" target="_blank" class="btn">Daftar Sekarang<i class="lni lni-ticket"></i></a>
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
                        <h5 class="wow zoomIn" data-wow-delay=".2s"><i class="lni lni-map-marker"></i> Dringo Marathon,
                            Banjarnegara</h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Pelaksanaan lomba dilakukan pada, Minggu 29 Oktober 2023</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Kategori Pelajar SMP dan SMA Putra Putri, <br> Mahasiswa dan Umum Putra dan Putri.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="https://wa.me/6281229606746" target="_blank" class="btn ">Beli Tiket</a>
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

    <section>
        <div class="contact-us section">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="contact-widget-wrapper">
                                <div class="main-title">
                                    <h2>
                                        Butuh Bantuan dalam pendaftaran ?
                                    </h2>
                                    <p>Hubungi kami jika kamu mengalami kendala dalam pendaftaran untuk mengikuti dringo marathon.</p>
                                </div>
                                <div class="contact-widget-block">
                                    <h3 class="title">Nomor Whatsapp</h3>
                                    <p>+62 812-2960-6746</p>
                                </div>
                                <div class="contact-widget-block">
                                    <h3 class="title">Email us</h3>
                                    <p>serayunews@mail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="contact-form">
                                <form class="form" method="post" action="{{route('participant.register')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <input name="email" type="email" placeholder="Masukan Email" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <input name="password" type="password" placeholder="Masukan Password" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <input name="nik" type="text" placeholder="Masukan NIK Kamu" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <input name="name" type="text" placeholder="Masukan Nama" required="required">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-12">
                                            <div class="form-group">
                                                <select name="category" class="form-control" required id="">
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="Pelajar">Pelajar (SMP/SMA/SMK)</option>
                                                    <option value="Umum">Umum (Mahasiswa/Umum)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <input name="birth_place" type="text" placeholder="Masukan Tempat Lahir" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <input name="birth_date" type="date" placeholder="Masukan Tanggal Lahir" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Masukan Alamat Kamu" name="address" id="message-area" class="form-control"></textarea>
                                    </div>
                                    <div class="button">
                                        <button type="submit" class="btn ">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <img class="shape" src="assets/images/features/shape.svg" alt="#">
                        <img class="shape2" src="assets/images/features/shape2.svg" alt="#">
                        <span class="serial">01</span>
                        <div class="service-icon">
                            <i class="lni lni-files"></i>
                        </div>
                        <h3>Registrasi dan Biaya Pendaftaran</h3>
                        <p>Setiap peserta wajib melakukan registrasi dengan mengisi formulir serta membayar biasa pendaftaran sebesar Rp 150.000,-</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-featuer">
                        <img class="shape" src="assets/images/features/shape.svg" alt="#">
                        <img class="shape2" src="assets/images/features/shape2.svg" alt="#">
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
                        <img class="shape" src="assets/images/features/shape.svg" alt="#">
                        <img class="shape2" src="assets/images/features/shape2.svg" alt="#">
                        <span class="serial">03</span>
                        <div class="service-icon">
                            <i class="lni lni-heart"></i>
                        </div>
                        <h3>Lebih dari Sekadar Perlombaan!</h3>
                        <p>Tiket lomba lari sudah termasuk tiket untuk masuk ke sejumlah objek wisata yang ada di dataran tinggi Dieng Kabupaten Banjarnegara.</p>
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
                        <img src="assets/images/route/route.png" alt="#">
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
            <div class="row gx-5">
                <div class="col">
                    <a href="javascript:void(0)" class="single-sponsor">
                        <img src="/assets/images/sponsor/sponsor.png" alt="#">
                    </a>
                </div>
                <div class="col">
                    <a href="javascript:void(0)" class="single-sponsor">
                        <img src="/assets/images/sponsor/sponsor.png" alt="#">
                    </a>
                </div>
                <div class="col">
                    <a href="javascript:void(0)" class="single-sponsor">
                        <img src="/assets/images/sponsor/sponsor.png" alt="#">
                    </a>
                </div>
                <div class="col">
                    <a href="javascript:void(0)" class="single-sponsor">
                        <img src="/assets/images/sponsor/sponsor.png" alt="#">
                    </a>
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
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Bergabunglah di Dringo Marathon dan Lari Bersama!
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Pendaftaran Mulai Tanggal 15 September - 15 Oktober 2023</p>
                            <p class="wow fadeInUp" data-wow-delay=".6s">mengajak masyarakt untuk ambil bagian dalam acara Dringo Marathon yang tidak hanya tentang lari, tetapi juga tentang mengambil tindakan untuk menjaga kesehatan dan kebugaran.</p>
                        </div>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="https://wa.me/6281229606746" target="_blank" class="btn">Daftar Sekarang<i class="lni lni-ticket"></i></a>
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