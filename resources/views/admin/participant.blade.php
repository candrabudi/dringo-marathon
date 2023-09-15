@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <h5 class="card-header">Data Peserta</h5>
            <div class="card-datatable table-responsive">
                <table class="dt-multilingual table border-top" id="get-participant">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Kategori</th>
                            <th>Daftar Ulang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Detail Peserta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" id="name" class="form-control" disabled/>
                    </div>
                    <div class="col mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" class="form-control" disabled/>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" id="nik" class="form-control" disabled/>
                    </div>
                    <div class="col mb-3">
                        <label for="phone_number" class="form-label">Nomor Handphone</label>
                        <input type="text" id="phone_number" class="form-control" disabled/>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="birth_place" class="form-label">Tempat Lahir</label>
                        <input type="text" id="birth_place" class="form-control" disabled/>
                    </div>
                    <div class="col mb-3">
                        <label for="birth_date" class="form-label">Tanggal Lahir</label>
                        <input type="text" id="birth_date" class="form-control" disabled/>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <input type="text" id="gender" class="form-control" disabled/>
                    </div>
                    <div class="col mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <input type="text" id="category" class="form-control" disabled/>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="illnes_history" class="form-label">Riwayat Penyakit</label>
                        <input type="text" id="illnes_history" class="form-control" disabled/>
                    </div>
                    <div class="col mb-3">
                        <label for="blood_group" class="form-label">Golongan Darah</label>
                        <input type="text" id="blood_group" class="form-control" disabled/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@section('scripts')
<script>
    $(function() {
        var table = $('#get-participant').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: '{!! route('admin.dataTable') !!}',
            columns: [{
                    data: 'no'
                },
                {
                    data: 'nik'
                },
                {
                    data: 'email'
                },
                {
                    data: 'name'
                },
                {
                    data: 'gender'
                },
                {
                    data: 'category'
                },
                {
                    data: 'id',
                    render: function(id, typ, row) {
                        if (row.is_registration == true) {
                            return '<button class="my-1 btn btn-success btn-sm"  style="display: inline-block;" disabled><i class="ti ti-edit me-1"></i> Sudah Daftar Ulang</button>';
                        } else {
                            return '<button class="my-1 btn btn-primary btn-sm re-register" style="display: inline-block;" data-id="' + id + '"><i class="ti ti-edit me-1"></i> Daftar Ulang</button>';
                        }
                    },
                },
                {
                    data: 'id',
                    render: function(id, typ, row) {
                        return '<button class="my-1 btn btn-info btn-sm info-participant" data-bs-toggle="modal" data-bs-target="#modalCenter" style="display: inline-block;" data-id="' + id + '"><i class="ti ti-edit me-1"></i> Detail</button>';
                    },
                },
            ],
        });
    });

    $('#get-participant').on('click', '.info-participant', function() {
        console.log("kodok");
        var id = $(this).data('id');
        $.get("/admin/participant/detail/" + id, function(data) {
            let id = data.id;
            $('#name').val(data.name);
            $('#email').val(data.email);
            $('#nik').val(data.user_detail.nik);
            $('#phone_number').val(data.user_detail.phone_number);
            $('#gender').val(data.user_detail.gender);
            $('#birth_place').val(data.user_detail.birth_place);
            $('#birth_date').val(data.user_detail.birth_date);
            $('#address').val(data.user_detail.address);
            $('#category').val(data.user_detail.category);
            $('#illnes_history').val(data.user_detail.illnes_history);
            $('#blood_group').val(data.user_detail.blood_group);
        })
    });

    $('#get-participant').on('click', '.re-register', function() {
        var id = $(this).data('id');

        Swal.fire({
            text: 'Apakah kamu yakin mau daftar ulang?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            customClass: {
                confirmButton: 'btn btn-primary me-2',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route('admin.update',':id') }}'.replace(':id', id),
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    statusCode: {
                        200: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Data kamu berhasil di daftar ulang.',
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                }
                            }).then(function() {
                                $('#get-participant').DataTable().ajax.reload();
                            });
                        },
                        400: function(response) {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Maaf data ini tidak bisa di update!',
                                icon: 'error',
                                customClass: {
                                    confirmButton: 'btn btn-primary'
                                },
                                buttonsStyling: false
                            });
                        },
                        500: function(response) {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Maaf ada kesalahan internal!',
                                icon: 'error',
                                customClass: {
                                    confirmButton: 'btn btn-primary'
                                },
                                buttonsStyling: false
                            });
                        }
                    }
                });
            }
        });
    });
</script>
@endsection