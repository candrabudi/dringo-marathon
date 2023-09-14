@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <span class="d-block mb-1">Total Peserta Umum</span>
                        <h3 class="card-title text-nowrap mb-2">{{$count_umum}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <span class="fw-semibold d-block mb-1">Total Peserta Pelajar</span>
                        <h3 class="card-title mb-2">{{$count_pelajar}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <span class="d-block mb-1">Total Laki-laki</span>
                        <h3 class="card-title text-nowrap mb-2">{{$count_m}}</h3>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <span class="fw-semibold d-block mb-1">Total Perempuan</span>
                        <h3 class="card-title mb-2">{{$count_f}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
