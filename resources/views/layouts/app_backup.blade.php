<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard Dringo Marathon 10k</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container-invoice {
            width: 100%;
            max-width: 620px;
            padding-right: 20px;
            padding-left: 20px;
            margin: auto;
        }

        .invoice {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.1), 0 10px 10px rgba(0, 0, 0, 0.13);
            margin: 50px 0px;
            padding: 50px 30px 30px;
        }

        .invoice header {
            overflow: hidden;
            margin-bottom: 60px;
        }

        .invoice header section:nth-of-type(1) {
            float: left;
        }

        .invoice header section:nth-of-type(1) h1 {
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 2px;
            color: #333333;
            font-size: 25px;
            margin-top: 0;
            margin-bottom: 5px;
        }

        .invoice header section:nth-of-type(1) span {
            color: #b7bcc3;
            font-size: 14px;
            letter-spacing: 2px;
        }

        .invoice header section:nth-of-type(2) {
            float: right;
        }

        .invoice header section:nth-of-type(2) span {
            font-size: 21px;
            color: #b7bcc3;
            letter-spacing: 1px;
        }

        .invoice header section:nth-of-type(2) span:before {
            content: "#";
        }

        .invoice main {
            border: 1px dashed #b7bcc3;
            border-left-width: 0px;
            border-right-width: 0px;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .invoice main section {
            overflow: hidden;
        }

        .invoice main section span {
            float: left;
            color: #333333;
            font-size: 16px;
            letter-spacing: 0.5px;
        }

        .invoice main section span:nth-of-type(1) {
            width: 45%;
            margin-right: 5%;
        }

        .invoice main section span:nth-of-type(2) {
            width: 22.5%;
            margin-right: 5%;
        }

        .invoice main section span:nth-of-type(2),
        .invoice main section span:nth-of-type(3) {
            text-align: right;
        }

        .invoice main section span:nth-of-type(3) {
            width: 22.5%;
        }

        .invoice main section:nth-of-type(1) {
            margin-bottom: 30px;
        }

        .invoice main section:nth-of-type(1) span {
            color: #b7bcc3;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 13px;
        }

        .invoice main section:nth-of-type(2) {
            margin-bottom: 30px;
        }

        .invoice main section:nth-of-type(2) figure {
            overflow: hidden;
            margin: 0;
            margin-bottom: 20px;
            line-height: 160%;
        }

        .invoice main section:nth-of-type(2) figure:last-of-type {
            margin-bottom: 0px;
        }

        .invoice main section:nth-of-type(3) span:nth-of-type(1) {
            width: 72.5%;
            font-weight: bold;
        }

        .invoice main section:nth-of-type(3) span:nth-of-type(2) {
            margin-right: 0 !important;
        }

        .invoice footer {
            text-align: right;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Dringo Marathon 10K
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>