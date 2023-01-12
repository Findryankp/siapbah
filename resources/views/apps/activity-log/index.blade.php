@extends('layouts.app')
@section('title', 'Activity Log')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Daftar Activity Log</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Activity Log</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card border border-dark">
                <div class="card-body">
                    <div class="table-responsive mt-3 mb-1">
                        <table id="datatable-v" class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Diakses</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($activity_log as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->User->name }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td>{{ $row->created_at }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak Ada Data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    {{ $activity_log->links('vendor.pagination.bootstrap-5') }}
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>

@stop
@push('js')
<script>
    $(document).ready(function() {
        $('#datatable-v').DataTable({
            dom: 'Bfrtip',
            buttons: {
                buttons: [
                { text: '<i class="ri-file-copy-line align-bottom me-1"></i> Copy', extend: 'copy', className: 'btn btn-outline-primary'},
                { text: '<i class="ri-file-excel-2-line align-bottom me-1"></i> Excel', extend: 'excel', className: 'btn btn-outline-primary'},
                { text: '<i class="ri-file-pdf-line align-bottom me-1"></i> PDF', extend: 'pdf', className: 'btn btn-outline-primary'},
                { text: '<i class="ri-printer-line align-bottom me-1"></i> Print', extend: 'print', className: 'btn btn-outline-primary'},
                ]},
            });
    });
</script>
@endpush
