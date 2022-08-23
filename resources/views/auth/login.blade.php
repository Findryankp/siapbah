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
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-4">

                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p class="text-muted">Sign in to continue to SIAPBAH.</p>
                        </div>
                        <div class="p-2 mt-4">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="text" type="email" name="email"  class="form-control" id="username" placeholder="Enter Email" required autofocus>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="password-input">Password</label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input type="password" name="password" class="form-control pe-5" placeholder="Enter password" required autocomplete="current-password">
                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end mt-4">
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary w-100" type="submit">Login</button>
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
