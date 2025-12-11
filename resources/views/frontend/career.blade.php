@extends('layouts.frontend')
@section('title', 'Nous recrutons')
@section('content')
    <!-- début zone fil d’Ariane -->
    <div class="breadcrumb-bg bg_image" style="background-image:url({{ asset('frontend/assets/images/service-8.jpeg') }});">
        <div class="rts-breadcrumb-area" style="background-color: #0000007d">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-12 breadcrumb-1">
                        <h1 class="title">Nous recrutons</h1>
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
                                Nous recrutons
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
                            <form action="{{ route('career.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="name-email">
                                    <input type="text" name="name" placeholder="Entrez le nom" required>
                                    <input type="text" name="position" placeholder="Entrez le poste" required>
                                </div>
                                <input type="file" name="file" placeholder="Télécharger le CV">
                                <textarea placeholder="Tapez la lettre de motivation" name="cover"></textarea>
                                <button type="submit" class="rts-btn btn-primary">Soumettre</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin zone formulaire de contact -->
@endsection
