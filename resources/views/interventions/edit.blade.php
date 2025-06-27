@extends('layouts.app')
@section('title', 'Modifier le intervention')
@section('content')

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body" data-select2-id="18">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Modifier le intervention</h2>
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
                                    <h6 class="main-content-label tx-15">Modifier le intervention</h6>
                                </div>
                            </div>
                            <div class="card-body" data-select2-id="14">
                                {{-- needs-validation was-validated --}}
                                <form class="row g-3" action="{{ route('interventions.update', $schedule->id) }}" novalidate=""
                                    method="POST" data-select2-id="13">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
                                        <label for="employee_id" class="form-label tx-semibold">Sélectionner un
                                            employé</label>
                                        <select class="form-select" name="employee_id" id="employee_id" required="">
                                            <option selected="" disabled="" value="">Choisir...</option>
                                            @foreach (\App\Models\User::where('role', 'employee')->get() as $user)
                                                <option value="{{ $user->id }}" @selected($user->id == old('role', @$schedule->employee_id))>
                                                    {{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('employee_id')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="client_id" class="form-label tx-semibold">Sélectionner un client</label>
                                        <select class="form-select" name="client_id" id="client_id" required="">
                                            <option selected="" disabled="" value="">Choisir...</option>
                                            @foreach (\App\Models\User::where('role', 'client')->get() as $user)
                                                <option value="{{ $user->id }}" @selected($user->id == old('role', @$schedule->client_id))>
                                                    {{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('client_id')
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
