@extends('layouts.app')
@section('title', 'Version List')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Version List</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Version List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-xxl-5">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Version Activites</h4>
                    </div><!-- end card header -->
                    <div class="card-body pt-0">
                        <ul class="list-group list-group-flush border-dashed">
                            @foreach($version as $row)
                                <li class="list-group-item ps-0">
                                    <div class="row align-items-center g-3">
                                        <div class="col-auto">
                                            <div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 shadow">
                                                <div class="text-center">
                                                    <h5 class="mb-0">{{ $row->version }}</h5>
                                                    <div class="text-muted">{{ $row->status }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h5 class="text-muted mt-0 mb-1 fs-13">{{ $row->start_date }} s/d {{ !empty($row->end_date) ? $row->end_date : 'next'}}</h5>
                                            <ol>
                                                @foreach($row->version_detail as $detail)
                                                    <li>{{ $detail->version_detail }}</li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </li><!-- end -->
                            @endforeach
                        </ul><!-- end -->
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

@stop
@push('js')
    <!-- listjs init -->
@endpush
