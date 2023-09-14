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
@endsection
@section('scripts')
    <script>
        $(function() {
            var table = $('#get-participant').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: '{!! route('admin.dataTable') !!}',
                columns: [
                    {
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
                        data: 're_registration'
                    },
                    {
                        data: 'id',
                        render: function(id, type, row) {    
                            return '<button class="my-1 btn btn-primary btn-sm re-register"  style="display: inline-block;" data-id="' + id + '"><i class="ti ti-edit me-1"></i> Daftar Ulang</button>';
                        },
                    },
                ],
            });
        });

        $('#get-participant').on('click', '.re-register', function() {
            console.log("kodok")
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
                        url: '{{ route('admin.update', ':id') }}'.replace(':id', id),
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        statusCode:{
                            200:function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Deleted!',
                                    text: 'Data kamu berhasil di daftar ulang.',
                                    customClass: {
                                        confirmButton: 'btn btn-success'
                                    }
                                }).then(function() {
                                    $('#get-kegiatan').DataTable().ajax.reload();
                                });
                            },
                            400:function(response){
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
                            500:function(response){
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
