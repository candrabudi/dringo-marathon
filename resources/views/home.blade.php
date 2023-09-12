@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(empty($check_invoice))
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Ketentuan Pendaftaran!</h4>
                        <p>Silahkan melakukan pembayaran, untuk menyelesaikan pendaftaran dengan biaya sebesar <b>{{ Auth::user()->userDetail->category == "Pelajar" ? "Rp 100.000" : "Rp 150.000" }}</b></p>
                    </div>
                    <form action="{{route('create_invoice')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            Daftar Sekarang
                        </button>
                    </form>
                    @else
                    @if($check_invoice->is_paid == 1)
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Hore kamu sudah mendaftar!</h4>
                        <p>Silahkan tunjukan invoice ini ke loket pendaftaran, untuk ditukarkan dengan jersey, tiket wisata disekitar area dieng, dan nomor dada.</p>
                        <p>Penukaran dilakukan tanggal 28 Oktober 2023</p>
                    </div>
                    @else
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Ketentuan Pendaftaran!</h4>
                        <p>Silahkan melakukan pembayaran, untuk menyelesaikan pendaftaran dengan biaya sebesar <b>{{ Auth::user()->userDetail->category == "Pelajar" ? "Rp 100.000" : "Rp 150.000" }}</b></p>
                    </div>
                    @endif
                    <div class="container">
                        <div class="container-invoice">
                            <div class="invoice">
                                <header>
                                    <section>
                                        <img src="{{asset('assets/images/logo/logo-dringo.jpeg')}}" width="100" alt="">
                                        <h1>Invoice</h1>
                                        <span>{{\Carbon\Carbon::parse($check_invoice->created_at)->format('d/m/Y')}}</span>
                                    </section>
                                </header>

                                <main>
                                    <section>
                                        <span>Tipe Daftar</span>
                                        <span>Total</span>
                                        <span>Harga</span>
                                    </section>

                                    <section>
                                        <figure>
                                            <span>Pendaftar Umum</span>
                                            <span>1</span>
                                            <span>{{ Auth::user()->userDetail->category == "Pelajar" ? "Rp " . number_format(100000,0,',','.') : "Rp " . number_format(150000,0,',','.') }}</span>
                                        </figure>
                                    </section>

                                    <section>
                                        <span>Total</span>
                                        <span>{{ Auth::user()->userDetail->category == "Pelajar" ? "Rp " . number_format(100000,0,',','.') : "Rp " . number_format(150000,0,',','.') }}</span>
                                    </section>
                                </main>

                                <footer>
                                    @if($check_invoice->is_paid == 0)
                                        <a href="{{$check_invoice->invoice_xendit_url}}" class="btn btn-success" target="_blank">Bayar Invoice</a>
                                    @else
                                    <a href="{{route('download_invoice')}}" target="_blank" class="btn btn-primary">Download PDF</a>
                                    @endif
                                </footer>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection