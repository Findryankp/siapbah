@extends('layouts.guest')

@section('title', 'Login')

@section('content')

<!-- auth page bg -->
<div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
    <div class="bg-overlay"></div>

    <div class="shape">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
            <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
        </svg>
    </div>
</div>

<!-- auth page content -->
<div class="auth-page-content">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center text-white-50 mt-5">
                    <div>
                        <a href="/" class="d-inline-block auth-logo">
                            <img style="height:70px" src="assets/images/logo-white.png">
                        </a>
                    </div>
                    <br>
                    <p class="fs-15 fw-medium">Sistem Informasi Keanggotaan POKMAS Penerima Hibah</p>
                </div>
            </div>
        </div>

        <!-- end row -->

        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="card mt-4">
                    <div class="card-body p-4">
                        <div class="mt-2">
                            <h4 class="text-primary">Register</h4>
                        </div>
                        <div class="p-2 mt-3">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{url('register')}}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Job Title</label>
                                    <input type="text" name="job_title" class="form-control" placeholder="Job Title" required>
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary w-100" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end auth page content -->

@stop
