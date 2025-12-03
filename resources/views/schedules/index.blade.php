@extends('layouts.app')
@section('title', 'Liste des Plannings')
@section('content')

    <!-- CONTENU PRINCIPAL -->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- EN-TÊTE DE PAGE -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">plannings</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">plannings</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liste</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <a href="{{route('schedules.create')}}" class="btn btn-primary my-2 btn-icon-text">
                                <i class="fe fe-plus bg-white-transparent text-white"></i>
                                <span>Ajouter une planning</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- FIN EN-TÊTE DE PAGE -->

                <!-- LIGNE -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Liste des plannings</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="users-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-20p">Employé</th>
                                                <th class="wd-20p">Client</th>
                                                <th class="wd-25p">Date</th>
                                                <th class="wd-20p">Heure de début</th>
                                                <th class="wd-20p">Heure de fin</th>
                                                <th class="wd-20p">Action</th>
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
                <!-- FIN LIGNE -->

            </div>
        </div>
    </div>
    <!-- FIN CONTENU PRINCIPAL -->

@endsection

@push('scripts')

    <script>

        $(function() {

            var table = $('#users-datatable').DataTable({

                processing: true,

                serverSide: true,

                ajax: "{{ route('schedules.index') }}",

                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
                },

                columns: [

                    {
                        data: 'employee_name',
                        name: 'employee_name'
                    },
                    {
                        data: 'client_name',
                        name: 'client_name'
                    },

                    {
                        data: 'date',
                        name: 'date'
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
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },

                ]

            });

        });
    </script>
@endpush
