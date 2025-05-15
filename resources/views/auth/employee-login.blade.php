@extends('auth.layouts.app')
@section('title','connectez vous')
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
                                        <form action="login" method="POST">
                                            @csrf
                                            <input type="hidden" name="role" value="employee">
                                            <h2 class="text-start mb-2">connectez vous</h2>
                                            <p class="mb-4 text-muted tx-13 ms-0 text-start">Sign in to Create, Discover
                                                and Connect with the Global Community</p>
                                            <div class="panel desc-tabs border-0 p-0">
                                                <div class="panel-body tabs-menu-body mt-2">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab01">
                                                            <div class="form-group text-start">
                                                                <label for="email" class="tx-medium">Email</label>
                                                                <input id="email" type="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    name="email" value="{{ old('email') }}" required
                                                                    autocomplete="email" autofocus>

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group text-start">
                                                                <label for="password" class="tx-medium">Password</label>
                                                                <input id="password" type="password"
                                                                    class="form-control @error('password') is-invalid @enderror"
                                                                    name="password" required
                                                                    autocomplete="current-password">

                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-block">connectez vous</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="text-center mt-4 ms-0 mb-3">
                                            <div class="mb-1"><a href="{{ route('password.request') }}">Forgot
                                                password?</a></div>
                                                {{--
                                                <div>Don't have an account? <a href="{{ route('register') }}">Register
                                                    Here</a></div>--}}
                                        </div>
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
