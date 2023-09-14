<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Pendaftaran Maraton Atas Awan Dieng 10K</title>

    <meta name="description" content="" />

    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('backend/vendor/fonts/boxicons.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/vendor/css/pages/page-auth.css') }}" />
    <script src="{{ asset('backend/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('backend/js/config.js') }}"></script>
</head>

<body>

    <div class="container-xxl">
        <div class="authentication-wrapper container-p-y">
            <div class="authentication-inner">
                <div class="card card-body">
                    <div class="app-brand justify-content-center">
                        <a href="/" class="app-brand-link gap-2">
                            <img src="{{ asset('assets/images/logo/logo-etawalin.png') }}" style="width: 200px;" alt="#">
                        </a>
                    </div>
                </div>
                <div class="card">
                    <form id="formAuthentication" class="mb-3"  method="POST" action="{{route('participant.register')}}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" autofocus />
                                    </div>
                                    <div class="mb-3 form-password-toggle">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukan NIK" autofocus />
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Peserta</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama" autofocus />
                                    </div>
                                    <div class="mb-3">
                                        <label for="birth_place" class="form-label">Tempat Lahir</label>
                                        <input name="birth_place" type="text" class="form-control" placeholder="Masukan Tempat Lahir" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <label for="birth_date" class="form-label">Tempat Lahir</label>
                                        <input name="birth_date" type="date" class="form-control" placeholder="Masukan Tanggal Lahir" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">No Handphone</label>
                                        <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Masukan Nomor Handphone" autofocus />
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Jenis Kelamin</label>
                                        <select name="gender" class="form-control" required id="">
                                            <option value="">Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="blood_group" class="form-label">Golongan Darah</label>
                                        <select name="blood_group" class="form-control" required id="">
                                            <option value="">Pilih Golongan Darah</option>
                                            <option value="O">O</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Kategori</label>
                                        <select name="category" class="form-control" required id="">
                                            <option value="">Pilih Kategori</option>
                                            <option value="Pelajar">Pelajar (SMP/SMA/SMK)</option>
                                            <option value="Umum">Umum (Mahasiswa/Umum)</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="illness_history" class="form-label">Riwayat Penyakit (Opsional)</label>
                                        <input name="illness_history" type="text" class="form-control" placeholder="Masukan Riwayat Penyakit">
                                    </div>
                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat</label>
                                        <input name="address" type="text" class="form-control" placeholder="Masukan Alamat" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary d-grid w-100">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('backend/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('backend/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('backend/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('backend/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>