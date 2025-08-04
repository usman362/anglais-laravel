@extends('layouts.frontend')
@section('title', 'Contactez-nous')
@section('content')
    <!-- début zone fil d’Ariane -->
    <div class="breadcrumb-bg bg_image" style="background-image:url({{ asset('frontend/assets/images/service-8.jpeg') }});">
        <div class="rts-breadcrumb-area" style="background-color: #0000007d">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-12 breadcrumb-1">
                        <h1 class="title">Contactez-nous</h1>
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
                        <div class="rts-title-area text-center mb--50">
                            <p class="pre-title">
                                Entrer en contact
                            </p>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages">
                                @if (session('success'))
                                    <div class="alert alert-success" id="success-message" role="alert">
                                        {{ session('success') }}
                                    </div>

                                    <script>
                                        setTimeout(function() {
                                            let alertBox = document.getElementById('success-message');
                                            if (alertBox) {
                                                alertBox.style.transition = 'opacity 0.5s ease';
                                                alertBox.style.opacity = 0;
                                                setTimeout(() => alertBox.remove(), 500); // remove after fade out
                                            }
                                        }, 5000); // 5 seconds
                                    </script>
                                @endif
                            </div>
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
