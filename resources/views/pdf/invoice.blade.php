<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @page {
            size: 210mm 130mm;
        }
        .header h2{
            font-family: Arial, Helvetica, sans-serif;
        }
        .header span{
            font-family: Arial, Helvetica, sans-serif;
        }
        .header {
            height: 100px;
        }
        thead tr th{
            /* height: 30px; */
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>INVOICE</h2>
            <span>{{\Carbon\Carbon::parse($check_invoice->created_at)->format('d/m/Y')}}</span>
            <table style="width: 50%;margin-top:30px; margin-bottom:30px">
                <tr>
                    <td>Nik</td>
                    <td>:</td>
                    <td>{{Auth::user()->userDetail->nik}}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{Auth::user()->name}}</td>
                </tr>
            </table>
        </div>
        <hr style="border: 1px dashed #000;margin-top:60px;">
        <div class="invoice">
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 50%;">TIPE DAFTAR</th>
                        <th style="width: 15%;text-align: center;">Qty</th>
                        <th style="text-align: right">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="height: 60px;">
                            Tipe {{$user->userDetail->category}}
                        </td>
                        <td style="text-align: center;">
                            1
                        </td>
                        <td style="text-align: right">
                            {{ Auth::user()->userDetail->category == "Pelajar" ? 100000 : 150000 }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <table style="margin-top:30px; width:100%;">
                <tbody>
                    <tr>
                        <td style="width: 50%;text-align: left;">
                            Total
                        </td>
                        <td style="width: 50%;text-align: right;">
                        {{ Auth::user()->userDetail->category == "Pelajar" ? 100000 : 150000 }}
                        </td>
                    </tr>
                </tbody>   
            </table>
            <hr style="border: 1px dashed #000;">
        </div>
    </div>
</body>

</html>