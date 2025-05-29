@extends('layouts.app')
@section('title', 'Modifier un utilisateur')
@section('content')

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body" data-select2-id="18">

                <!-- EN-TÊTE DE PAGE -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Modifier un utilisateur</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Utilisateurs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modifier</li>
                        </ol>
                    </div>
                </div>
                <!-- FIN EN-TÊTE DE PAGE -->

                <!-- LIGNE -->
                <div class="row" data-select2-id="17">
                    <div class="col-lg-12 col-md-12" data-select2-id="16">
                        <div class="card custom-card" data-select2-id="15">
                            <div class="card-header">
                                <div>
                                    <h6 class="main-content-label tx-15">Modifier un utilisateur</h6>
                                </div>
                            </div>
                            <div class="card-body" data-select2-id="14">
                                {{-- needs-validation was-validated --}}
                                <form class="row g-3" action="{{ route('users-management.update', $user->id) }}"
                                    novalidate="" method="POST" data-select2-id="13">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-6">
                                        <label for="first_name" class="form-label tx-semibold">Prénom</label>
                                        <input type="text" name="first_name" class="form-control" id="first_name"
                                            value="{{ explode(' ', $user->name, 2)[0] }}" required="">

                                        @error('first_name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name" class="form-label tx-semibold">Nom</label>
                                        <input type="text" name="last_name" class="form-control" id="last_name"
                                            value="{{ explode(' ', $user->name, 2)[1] }}" required="">
                                        @error('last_name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label tx-semibold">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="email" name="email" class="form-control" id="email"
                                                aria-describedby="inputGroupPrepend" value="{{ $user->email }}"
                                                required="">
                                            @error('email')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class="form-label tx-semibold">Mot de passe</label>
                                        <div class="input-group has-validation">
                                            <input type="text" name="password" class="form-control" id="password"
                                                required="">
                                            @error('password')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role" class="form-label tx-semibold">Rôle</label>
                                        <select class="form-select" name="role" id="role" required="">
                                            <option selected disabled value="">Choisir...</option>
                                            <option value="employee" @selected($user->role == 'employee')>Employé</option>
                                            <option value="client" @selected($user->role == 'client')>Client</option>
                                        </select>
                                        @error('role')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN LIGNE -->
            </div>
        </div>
    </div>

@endsection
