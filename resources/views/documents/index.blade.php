@extends('layouts.app')
@section('title', 'Liste des '.$name)
@section('content')

    <!-- MAIN-CONTENT -->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">{{ $name }}</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Liste de</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                        </ol>
                    </div>
                    @if (auth()->user()->role == 'admin')
                        <div class="d-flex">
                            <div class="justify-content-center">
                                <a href="{{ route($type . '.create') }}" class="btn btn-primary my-2 btn-icon-text">
                                    <i class="fe fe-plus bg-white-transparent text-white"></i>
                                    <span>Ajouter une {{ $name }}</span>
                                </a>
                            </div>
                        </div>
                    @endif

                </div>
                <!-- END PAGE HEADER -->

                <!-- ROW-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Liste des {{$name}}</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="documents-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-20p">Nom de fichier</th>
                                                <th class="wd-20p">Utilisateur</th>
                                                <th class="wd-25p">Type</th>
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



            var table = $('#documents-datatable').DataTable({

                processing: true,

                serverSide: true,

                ajax: {
                    url: "{{ route('documents.index') }}",
                    type: 'GET',
                    data: function(d) {
                        d.type = '{{$type}}';
                    }
                },
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
                },
                columns: [

                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'user',
                        name: 'user'
                    },
                    {
                        data: 'type',
                        name: 'type'
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
