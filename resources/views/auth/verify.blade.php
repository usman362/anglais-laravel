@extends('auth.layouts.app')
@section('title', 'Vérifiez votre adresse e-mail')
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
                                            <img src="{{ asset('frontend/assets/images/LOGO-AGAPEÌ-purple.png') }}"
                                                class=" d-lg-none header-brand-img mb-4 dark-logo"
                                                alt="logo">
                                            <img src="{{ asset('frontend/assets/images/LOGO-AGAPEÌ-purple.png') }}"
                                                class=" d-lg-none header-brand-img mb-4 light-logo"
                                                alt="logo">
                                        </div>
                                        <div class="clearfix"></div>
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <h2 class="text-start mb-2">Vérifiez votre adresse e-mail</h2>
                                            <p class="mb-4 text-muted tx-13 ms-0 text-start">
                                                Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.
                                            </p>
                                            <p class="mb-4 text-muted tx-13 ms-0 text-start">
                                                Si vous n'avez pas reçu l'e-mail
                                            </p>
                                            @if (session('resent'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                                </div>
                                            @endif
                                            <div class="panel desc-tabs border-0 p-0">
                                                <div class="panel-body tabs-menu-body mt-2">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab01">
                                                            <button type="submit"
                                                                class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander un autre') }}</button>
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
                                <img src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ.png') }}" class="ht-250 mb-0" alt="utilisateur">
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
