@extends('auth.layouts.app')
@section('title', 'Verify Your Email Address')
@section('content')
    <!-- PAGE -->
    <div class="page main-signin-wrapper">
        <!-- ROW -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card border-0">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-6 col-xs-12 col-sm-12 login_form rounded-start-11">
                            <div class="container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        <div class="mobilelogo">
                                            <img src="{{ asset('assets/img/brand/logo.png') }}"
                                                class=" d-lg-none header-brand-img text-start float-start mb-4 dark-logo"
                                                alt="logo">
                                            <img src="{{ asset('assets/img/brand/logo-light.png') }}"
                                                class=" d-lg-none header-brand-img text-start float-start mb-4 light-logo"
                                                alt="logo">
                                        </div>
                                        <div class="clearfix"></div>
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('A fresh verification link has been sent to your email address.') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <h2 class="text-start mb-2">Verify Your Email Address</h2>
                                            <p class="mb-4 text-muted tx-13 ms-0 text-start">Before proceeding, please check
                                                your email for a verification link.</p>
                                            <p class="mb-4 text-muted tx-13 ms-0 text-start">If you did not receive the
                                                email</p>
                                            @if (session('resent'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                                </div>
                                            @endif
                                            <div class="panel desc-tabs border-0 p-0">
                                                <div class="panel-body tabs-menu-body mt-2">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab01">
                                                            <button type="submit"
                                                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6 d-none d-lg-block text-center bg-primary details rounded-end-11">
                            <div class="mt-4 pt-4 p-2 pos-relative">
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                                <img src="{{ asset('assets/img/pngs/user.png') }}" class="ht-250 mb-0" alt="user">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ROW -->
    </div>
    <!-- END PAGE -->
@endsection
