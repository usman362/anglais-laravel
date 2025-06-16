@extends('layouts.app')
@section('title', 'Liste des blogs')
@section('content')

    <!-- MAIN-CONTENT -->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Blogs</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Blogs</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liste</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <a href="{{ route('blogs.create') }}" class="btn btn-primary my-2 btn-icon-text">
                                <i class="fe fe-plus bg-white-transparent text-white"></i>
                                <span>Ajouter un blog</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END PAGE HEADER -->

                @include('includes.alert-message')

                <!-- ROW-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Liste des blogs</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="blogs-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-25p">Image</th>
                                                <th class="wd-20p">Titre</th>
                                                <th class="wd-20p">Statut</th>
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
                <!-- END ROW -->

            </div>
        </div>
    </div>
    <!-- END MAIN-CONTENT -->

@endsection

@push('scripts')
    <script>
        $(function () {
            var table = $('#blogs-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('blogs.index') }}",
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
                },
                columns: [
                    { data: 'image', name: 'image' },
                    { data: 'title', name: 'title' },
                    { data: 'status', name: 'status' },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false },
                ]
            });
        });
    </script>
@endpush
