@extends('layouts.app')
@section('title', 'Liste des Contactez nous')
@section('content')

    <!-- MAIN-CONTENT -->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Contactez nous</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Contactez nous</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Liste</li>
                        </ol>
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
                                    <h6 class="main-content-label mb-1">Liste des Contactez nous</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="contact_us">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p">Nom</th>
                                                <th class="wd-15p">E-mail</th>
                                                <th class="wd-15p">Sujet</th>
                                                <th class="wd-40p">Message</th>
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
            var table = $('#contact_us').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('contact_us_list') }}",
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'subject',
                        name: 'subject'
                    },
                    {
                        data: 'message',
                        name: 'message',
                    },
                ]
            });
        });
    </script>
@endpush
