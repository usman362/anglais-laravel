@extends('layouts.app')
@section('title', 'Liste des Nous recrutons')
@section('content')

    <!-- MAIN-CONTENT -->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Nous recrutons</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Nous recrutons</a></li>
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
                                    <h6 class="main-content-label mb-1">Liste des Nous recrutons</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="contact_us">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p">Nom</th>
                                                <th class="wd-15p">Position</th>
                                                <th class="wd-40p">Cover</th>
                                                <th class="wd-15p">Action</th>
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

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
             <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nous recrutons</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Name:</strong> <span id="contact-name"></span></p>
                            <p><strong>Position:</strong> <span id="contact-position"></span></p>
                            <p><strong>Resume:</strong> <span id="contact-resume"></span></p>
                            <p><strong>Cover Letter:</strong></p>
                            <p id="contact-cover"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

    <script>
        $(function () {
            var table = $('#contact_us').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('career_list') }}",
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'position',
                        name: 'position'
                    },
                    {
                        data: 'cover',
                        name: 'cover',
                    },
                    {
                        data: 'view-button',
                        name: 'view-button',
                    },
                ]
            });

            $('body').on('click', '.view-career', function() {
                var name = $(this).data('name');
                var position = $(this).data('position');
                var file = $(this).data('file');
                var cover = $(this).data('cover');

                $('#contact-name').text(name);
                $('#contact-position').text(position);
                $('#contact-resume').html(
                `<a href="`+file+`" class="btn btn-primary m-2" download><i class="fas fa-arrow-down"></i></a>`
                );
                $('#contact-cover').text(cover);
            });
        });
    </script>
@endpush
