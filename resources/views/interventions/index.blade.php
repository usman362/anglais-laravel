@extends('layouts.app')
@section('title', 'Liste des interventions')
@section('content')

    <!-- MAIN-CONTENT -->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Interventions</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Interventions</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liste</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        @if (auth()->user()->role == 'admin')
                            <div class="justify-content-center">
                                <a href="{{ route('interventions.create') }}" class="btn btn-primary my-2 btn-icon-text">
                                    <i class="fe fe-plus bg-white-transparent text-white"></i>
                                    <span>Ajouter une intervention</span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- END PAGE HEADER -->

                <!-- ROW-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Liste des interventions</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="users-datatable">
                                        <thead>
                                            <tr>
                                                <th class="">Titre de l’intervention</th>
                                                <th class="">Date</th>
                                                <th class="">Client</th>
                                                <th class="">Employé</th>
                                                <th class="">Heure de début</th>
                                                <th class="">Heure de fin</th>
                                                <th class="wd-30p">Notes</th>
                                                @if (auth()->user()->role == 'admin')
                                                    <th class="wd-20p">Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody class="notranslate">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ROW -->

            </div>
        </div>
    </div>
    <!-- END MAIN-CONTENT -->

@endsection

@push('scripts')
    <script>
        $(function() {
            var table = $('#users-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('interventions.index') }}",
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
                },
                columns: [{
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'intervention_date',
                        name: 'intervention_date'
                    },
                    {
                        data: 'client',
                        name: 'client'
                    },
                    {
                        data: 'employee',
                        name: 'employee'
                    },
                    {
                        data: 'start_time',
                        name: 'start_time'
                    },
                    {
                        data: 'end_time',
                        name: 'end_time'
                    },
                    {
                        data: 'notes',
                        name: 'notes'
                    },
                    @if (auth()->user()->role == 'admin')
                        {
                            data: 'actions',
                            name: 'actions',
                            orderable: false,
                            searchable: false
                        },
                    @endif
                ]
            });
        });
    </script>
@endpush
