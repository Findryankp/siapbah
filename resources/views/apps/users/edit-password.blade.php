@extends('layouts.app')
@section('title', 'Edit Password')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Password</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Edit Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div id="customerList">
                            <form action="{{ url('users-edit-password') }}" method="POST">
                                    @csrf
                                    <div class="col-md-6 mb-3">
                                        <label for="">Password Old</label>
                                        <input type="password" class="form-control" value="" name="password_old" placeholder="Password Old" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Password New</label>
                                        <input type="password" class="form-control" value="" name="password_new" placeholder="Password New" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <a href="{{ url()->previous() }}" class="btn btn-warning">Kembali</a>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                            </form>
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
@stop
@push('js')
<script>

</script>
@endpush
