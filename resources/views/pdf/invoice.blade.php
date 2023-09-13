<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="backend/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="backend/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="backend/css/demo.css" />

    <link rel="stylesheet" href="backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <style>
        @page {
            size: 210mm 250mm;
        }

        th {
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        td {
            color: #333;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>

    <div class="col-sm-12">
        <div class="card-body">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 50%;" class="">
                        <img src="{{public_path('storage/logo/logo-compress-dringo.webp')}}" style="width: 100px;">
                    </td>
                    <td style="width: 50%; line-height:50px;" class="text-end ">
                        <h1 class="text-end">
                            INVOICE #{{$check_invoice->id}}
                        </h1>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-6 ms-auto text-end text-sm-left">
        <div class="card-body pb-0 px-0 px-md-4">
            <table class="table info-invoice ms-auto">
                <tbody>
                    <tr>
                        <td style="width: 120px;">
                            INVOICE ID
                        </td>
                        <td class="text-start">: {{$check_invoice->invoice_event_id}}</td>
                    </tr>
                    <tr>
                        <td style="width: 120px;">
                            INVOICE DATE
                        </td>
                        <td class="text-start">: {{\Carbon\Carbon::parse($check_invoice->created_at)->format('d/m/Y')}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-body">
        <div class="col-12">
            <table class="table info-invoice">
                <tbody>
                    <tr>
                        <td style="width: 180px;">
                            NIK
                        </td>
                        <td class="text-start">: {{Auth::user()->userDetail->nik}}</td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">
                            NAMA
                        </td>
                        <td class="text-start">: {{Auth::user()->name}}</td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">
                            JENIS KELAMIN
                        </td>
                        <td class="text-start">: {{Auth::user()->userDetail->gender}}</td>
                    </tr>
                    <tr>
                        <td style="width: 180px;">
                            KATEGORI
                        </td>
                        <td class="text-start">: {{Auth::user()->userDetail->category}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 text-start">
            <div class="card-body pb-0 px-0 px-md-4">
                <table class="table">
                    <thead style="background-color: #00a8ff;">
                        <tr>
                            <th style="color: #fff" class="text-center">Item</th>
                            <th style="color: #fff" class="text-center">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Dieng Marathon Kategori {{Auth::user()->userDetail->category}}
                            </td>
                            <td class="text-end">{{ Auth::user()->userDetail->category == "Pelajar" ? "Rp " . number_format(100000,0,',','.') : "Rp " . number_format(150000,0,',','.') }}</td>
                        </tr>
                        <tr>
                            <td>
                                Total
                            </td>
                            <td class="text-end">{{ Auth::user()->userDetail->category == "Pelajar" ? "Rp " . number_format(100000,0,',','.') : "Rp " . number_format(150000,0,',','.') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 mt-3 text-start">
            <p class=""><i>Note:</i></p>
            <div class="demo-inline-spacing mt-3">
                <ul>
                    <li>
                        <i>
                            Tunjukan invoice ini pada loket pendaftaran untuk ditukarkan dengan jersey, nomor dada dan tiket wisata Dieng Banjarnegara
                        </i>
                    </li>
                    <li>
                        <i>
                            Penukaran dilaksanakan mulai tanggal 28 Oktober 2023
                        </i>
                    </li>
                    <li>
                        <i>
                            Loket pendaftaran berada di Museum Kailasa
                        </i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>