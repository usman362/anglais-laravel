@extends('layouts.app')
@section('title', 'Ajouter un utilisateur')
@section('content')

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body" data-select2-id="18">

                <!-- EN-TÊTE DE PAGE -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Ajouter un utilisateur</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Utilisateurs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Créer</li>
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
                                    <h6 class="main-content-label tx-15">Ajouter un utilisateur</h6>
                                </div>
                            </div>
                            <div class="card-body" data-select2-id="14">
                                {{-- needs-validation was-validated --}}
                                <form class="row g-3"
                                    action="{{ route('users-management.store') }}" novalidate="" method="POST"
                                    data-select2-id="13">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="first_name" class="form-label tx-semibold">Prénom</label>
                                        <input type="text" name="first_name" class="form-control" id="first_name"
                                            value="" required="">

                                        @error('first_name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name" class="form-label tx-semibold">Nom</label>
                                        <input type="text" name="last_name" class="form-control" id="last_name"
                                            value="" required="">
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
                                                aria-describedby="inputGroupPrepend" required="">
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
                                            <input type="text" name="password" class="form-control" id="password" required="">
                                            @error('password')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role" class="form-label tx-semibold">Rôle</label>
                                        <select class="form-select select-role" name="role" id="role" required="">
                                            <option selected="" disabled="" value="">Choisir...</option>
                                            <option value="employee">Employé</option>
                                            <option value="life_assistant">Assistants de vie</option>
                                            <option value="client">Client</option>
                                        </select>
                                        @error('role')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                     <div class="col-md-6 d-none" id="assignTo">
                                        <label for="assign_to" class="form-label tx-semibold">Attribuer à</label>
                                        <select class="form-select" name="assign_to" id="assign_to">
                                            @foreach ($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('assign_to')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="dob" class="form-label tx-semibold">date de naissance</label>
                                        <input type="date" name="dob" class="form-control" id="dob"
                                            value="" required="">
                                        @error('dob')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gender" class="form-label tx-semibold">sexe</label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="">Select Gender</option>
                                            <option value="male" {{ old('gender', $user->gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female" {{ old('gender', $user->gender ?? '') == 'female' ? 'selected' : '' }}>Female</option>
                                            <option value="other" {{ old('gender', $user->gender ?? '') == 'other' ? 'selected' : '' }}>Other</option>
                                        </select>

                                        @error('gender')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="address" class="form-label tx-semibold">adresse</label>
                                        <textarea name="address" class="form-control" id="address">
                                        </textarea>
                                        @error('address')
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

@push('scripts')
   <script>
$(document).ready(function () {

    function toggleAssignTo() {
        const role = $('.select-role').val();

        if (role === 'life_assistant') {
            $('#assignTo').removeClass('d-none');
        } else {
            $('#assignTo').addClass('d-none');
        }
    }

    // On change
    $('.select-role').on('change', toggleAssignTo);

    // On page load (important if edit form)
    toggleAssignTo();

});
</script>

@endpush
