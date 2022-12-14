@extends('layouts.app')
@section('title', 'Detail Anggota Hibah')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Detail Keanggotaan Pokmas</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Keanggotaan Pokmas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="card border border-dark">
                <div class="card-body">
                    <h5>Detail Ketua</h5>
                    <div id="customerList">
                        <div class="table-responsive mt-3 mb-1">
                            <table id="datatable-v" class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">No Nphd</th>
                                        <th scope="col">Nama Lembaga</th>
                                        <th scope="col">Nama Ketua</th>
                                        <th scope="col">NIK Ketua</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Alamat Lembaga</th>
                                        <th scope="col">Kota/Kab</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($ketua as $i => $row)
                                    <tr>
                                        <td>{{ $i+1 }}</td>
                                        
                                        <td>{{ $row->tahun }}</td>
                                        <td>{{ $row->no_nphd }}</td>
                                        <td>{{ $row->nama_lembaga }}</td>
                                        <td>{{ $row->nama_ketua }}</td>
                                        <td>{{ $row->nik_ketua }}</td>
                                        <td>{{ $row->jabatan }}</td>
                                        <td>{{ $row->alamat_lembaga }}</td>
                                        <td>{{ $row->kota_kab }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>Data tidak ada</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>

        <div class="col-lg-12">
            <div class="card border border-dark">
                <div class="card-body">
                    <h5>Detail Anggota</h5>
                    <div id="customerList">
                        <div class="table-responsive mt-3 mb-1">
                            <table id="datatable-v2" class="table table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Aksi</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($anggota as $i => $row)
                                    <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td>
                                            <a href="{{url('data/delete-anggota',$row->id)}}" class="btn btn-sm btn-danger"><i class="ri-delete-bin-2-line"></i></a>
                                        </td>
                                        <td>{{ $row->nik_anggota }}</td>
                                        <td>{{ $row->nama_anggota }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td>Data tidak ada</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>

<!-- model add user -->
@include('apps.data.components.modal-add')
@include('apps.data.components.modal-add-anggota')
@stop
@push('js')
<script>
    $(document).ready(function() {
        $('#datatable-v').DataTable();

        $('#datatable-v2').DataTable({
            dom: 'Bfrtip',
            buttons: {
                buttons: [
                {
                    text: '<i class="ri-add-line align-bottom me-1"></i> Tambah Anggota',
                    className: 'btn btn-primary btn_add_anggota',
                    action: function (e, node, config) {
                            // $('#addModalAnggota').modal('show')
                        }
                    },
                    ]},
                });

        $('.btn_add_anggota').click(function(){
            var id = "{{$ketua[0]->id}}";
            $('#id_daftar_keanggotaan_pokmas').val(id)
            $('#addModalAnggota').modal('show');
        });
    });

    $(document).on('input', '.input_ktp', function()
    {
        var no = $(this).val();

        if(/^[0-9]*$/.test(no) == false) {
            $('#input_ktp').val(no.slice(0,-1));
        }

        if(no.length != 16){
            $('.text_peringatan').show();

            if(no.length > 16){
                no = no.substring(0, no.length - 1);
                $(this).val(no)
                $('.text_peringatan').hide();
            }
        }else{
            $('.text_peringatan').hide();
        }
    });

</script>
@endpush
