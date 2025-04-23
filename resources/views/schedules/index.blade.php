@extends('layouts.app')
@section('title', 'Schedules List')
@section('content')

    <!-- MAIN-CONTENT -->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Schedules</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Schedules</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                    <div class="justify-content-center">
                        <a href="{{route('schedules.create')}}" class="btn btn-primary my-2 btn-icon-text">
                            <i class="fe fe-plus bg-white-transparent text-white"></i>
                            <span>Add Schedules</span>
                        </a>
                    </div>
                </div>
                </div>
                <!-- END PAGE HEADER -->

                <!-- ROW-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div>
                                    <h6 class="main-content-label mb-1">Schedules List</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="users-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-20p">User</th>
                                                <th class="wd-25p">Date</th>
                                                <th class="wd-20p">Start Time</th>
                                                <th class="wd-20p">End Time</th>
                                                <th class="wd-20p">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

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

                ajax: "{{ route('schedules.index') }}",

                columns: [

                    {
                        data: 'user_name',
                        name: 'user_name'
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
