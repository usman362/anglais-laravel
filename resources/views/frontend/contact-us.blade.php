@extends('layouts.frontend')
@section('title', 'Contactez-nous')
@section('content')
    <!-- début zone fil d’Ariane -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Contactez-nous</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Accueil</a>
                        <span> / </span>
                        <a href="#" class="active">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin zone fil d’Ariane -->

    <!-- début zone formulaire de contact -->
    <div class="rts-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-contact-fluid rts-section-gap">
                        <div class="rts-title-area contact-fluid text-center mb--50">
                            <p class="pre-title">
                                Entrer en contact
                            </p>
                            <h2 class="title">Besoin d'aide ? Contactez-nous</h2>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages"></div>
                            <form action="{{ route('store_contact_us') }}" method="post">
                                @csrf
                                <div class="name-email">
                                    <input type="text" name="name" placeholder="Votre nom" required>
                                    <input type="email" name="email" placeholder="Adresse e-mail" required>
                                </div>
                                <input type="text" name="subject" placeholder="Votre sujet">
                                <textarea placeholder="Tapez votre message" name="message"></textarea>
                                <button type="submit" class="rts-btn btn-primary">Envoyer le message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin zone formulaire de contact -->
@endsection

