@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-6 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Selamat {{Auth::user()->name}}! 🎉</h5>
                        @if(empty($check_invoice))
                        <p class="mb-4">
                            Silahkan melakukan pembayaran, untuk menyelesaikan pendaftaran dengan biaya sebesar <b>{{ Auth::user()->userDetail->category == "Pelajar" ? "Rp 100.000" : "Rp 150.000" }}</b>
                        </p>
                        <form action="{{route('create_invoice')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                Daftar Sekarang
                            </button>
                        </form>
                        @else
                        @if($check_invoice->is_paid == 1)
                        <p>Silahkan tunjukan invoice ini ke loket pendaftaran, untuk ditukarkan dengan jersey, tiket wisata disekitar area dieng, dan nomor dada.</p>
                        <p>Penukaran dilakukan tanggal 28 Oktober 2023</p>
                        @else
                        <p class="mb-4">
                            Silahkan melakukan pembayaran, untuk menyelesaikan pendaftaran dengan biaya sebesar <b>{{ Auth::user()->userDetail->category == "Pelajar" ? "Rp 100.000" : "Rp 150.000" }}</b>
                        </p>
                        @endif
                        @endif
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="backend/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($check_invoice)
    <div class="col-lg-6 mb-4 order-0">
        <div class="card">
            @if($check_invoice->is_paid == 0)
            <span class="badge bg-label-warning p-3">Masih Menunggu Pembayaran</span>
            @endif
            <div class="d-flex align-items-end row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/logo/logo-etawalin.png') }}" class="d-flex align-items-center" style="width:120px" alt="">
                            <h1 class="flex-row align-items-center ms-auto">
                                INVOICE
                            </h1>
                        </div>
                        <div class="col-sm-8 ms-auto text-end text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class=""><span class="fw-semibold">INVOICE ID : </span></td>
                                            <td class=" py-3">
                                                <h5 class="mb-0">{{$check_invoice->invoice_event_id}}</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=""><span class="fw-semibold">DATE : </span></td>
                                            <td class=" py-3">
                                                <h5 class="mb-0">{{\Carbon\Carbon::parse($check_invoice->created_at)->format('d/m/Y')}}</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-12 text-start">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item">NIK</li>
                                    <li class="list-inline-item">:</li>
                                    <li class="list-inline-item">{{Auth::user()->userDetail->nik}}</li>
                                </ul>
                                <ul class="list-inline">
                                    <li class="list-inline-item">NAMA</li>
                                    <li class="list-inline-item">:</li>
                                    <li class="list-inline-item">{{Auth::user()->name}}</li>
                                </ul>
                                <ul class="list-inline">
                                    <li class="list-inline-item">J KELAMIN</li>
                                    <li class="list-inline-item">:</li>
                                    <li class="list-inline-item">{{Auth::user()->userDetail->gender}}</li>
                                </ul>
                                <ul class="list-inline">
                                    <li class="list-inline-item">KATEGORI</li>
                                    <li class="list-inline-item">:</li>
                                    <li class="list-inline-item">{{Auth::user()->userDetail->category}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 text-start">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <table class="table">
                                    <thead style="background-color: #00a8ff;">
                                        <tr>
                                            <th style="color: #fff" class="text-center">ITEM</th>
                                            <th style="color: #fff" class="text-center">PRICE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                DIENG MARATHON KATEGORI {{Auth::user()->userDetail->category}}
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
                        @if($check_invoice->is_paid == 1)
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
                        <div class="d-grid gap-2 col-lg-12 mx-auto mt-3">
                            <a href="{{route('download_invoice')}}" target="_blank" style="width: 100%;display:block;" class="btn btn-lg btn-outline-success">Download Invoice</a>
                        </div>
                        @else
                        <div class="d-grid gap-2 col-lg-12 mx-auto mt-3">
                            <div class="form-group">
                                <a href="{{$check_invoice->invoice_xendit_url}}" target="_blank" class="btn btn-lg btn-outline-danger mt-3">
                                    Bayar Sekarang
                                </a>
                                <a href="#" class="btn btn-lg btn-outline-info mt-3" onclick="location.href = location.href;">Cek Status Pembayaran</a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection