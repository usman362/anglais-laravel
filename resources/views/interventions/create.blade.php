@extends('layouts.app')
@section('title', 'Ajouter une intervention')
@section('content')

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body" data-select2-id="18">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Ajouter une intervention</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Interventions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Créer</li>
                        </ol>
                    </div>
                </div>
                <!-- END PAGE HEADER -->

                <!-- ROW -->
                <div class="row" data-select2-id="17">
                    <div class="col-lg-12 col-md-12" data-select2-id="16">
                        <div class="card custom-card" data-select2-id="15">
                            <div class="card-header">
                                <div>
                                    <h6 class="main-content-label tx-15">Ajouter une intervention</h6>
                                </div>
                            </div>
                            <div class="card-body" data-select2-id="14">
                                {{-- needs-validation was-validated --}}
                                <form class="row g-3" action="{{ route('schedules.store') }}" novalidate="" method="POST"
                                    data-select2-id="13">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="first_name" class="form-label tx-semibold">Sélectionner la date</label>
                                        <div class="">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fe fe-calendar lh--9 op-6"></i>
                                                </div>
                                                <input class="form-control fc-datepicker" placeholder="MM/JJ/AAAA"
                                                    type="text" name="date"
                                                    value="{{ old('date', @$schedule->date) }}" required>
                                            </div>
                                        </div>
                                        @error('first_name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="user_id" class="form-label tx-semibold">Sélectionner un employé</label>
                                        <select class="form-select" name="user_id" id="user_id" required="">
                                            <option selected="" disabled="" value="">Choisir...</option>
                                            @foreach (\App\Models\User::all() as $user)
                                                <option value="{{ $user->id }}" @selected($user->id == old('role', @$schedule->user_id))>
                                                    {{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="col-md-12">
                                        <label for="notes" class="form-label tx-semibold">Notes</label>

                                        <textarea name="notes" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    @error('notes')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Soumettre le formulaire</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ROW -->
        </div>
    </div>
    </div>

@endsection
