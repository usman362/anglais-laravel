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
                    <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <p><strong>Name:</strong> <span id="contact-name"></span></p>
                            <p><strong>Email:</strong> <span id="contact-email"></span></p>
                            <p><strong>Subject:</strong> <span id="contact-subject"></span></p>
                            <p><strong>Message:</strong></p>
                            <p id="contact-message"></p>
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
                    {
                        data: 'view-button',
                        name: 'view-button',
                    },
                ]
            });

            $('body').on('click', '.view-contact-us', function() {
                var name = $(this).data('name');
                var email = $(this).data('email');
                var subject = $(this).data('subject');
                var message = $(this).data('message');

                $('#contact-name').text(name);
                $('#contact-email').text(email);
                $('#contact-subject').text(subject);
                $('#contact-message').text(message);
            });
        });
    </script>
@endpush
