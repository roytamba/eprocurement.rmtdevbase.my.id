@extends('layouts.auth')
@section('title', 'Verify Email')
@section('content')
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-lg-5">
                    <div class="card-header py-4 text-center bg-primary">
                        <a href="index.html">
                            <span><img src="{{ asset('admin/images/logo.png') }}" alt="logo" height="22"></span>
                        </a>
                    </div>
                    <div class="card-body p-4 bg-white">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center mt-0 fw-bold">{{ __('Verify Your Email Address') }}</h4>
                            <p class="text-muted mb-4">
                                {{ __('Before proceeding, please check your email for a verification link.') }}</p>
                        </div>

                        <div class="text-center w-100 m-auto">
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit"
                                    class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection
