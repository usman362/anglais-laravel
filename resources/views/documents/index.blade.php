@extends('layouts.app')
@section('title', $name . 's List')
@section('content')

    <!-- MAIN-CONTENT -->
    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">{{ $name }}s</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">{{ $name }}s</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </div>
                    @if (auth()->user()->role == 'admin')
                        <div class="d-flex">
                            <div class="justify-content-center">
                                <a href="{{ route($type . '.create') }}" class="btn btn-primary my-2 btn-icon-text">
                                    <i class="fe fe-plus bg-white-transparent text-white"></i>
                                    <span>Add {{ $name }}</span>
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
                                    <h6 class="main-content-label mb-1">{{ $name }}s List</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="documents-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-20p">File Name</th>
                                                <th class="wd-20p">User</th>
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

                ajax: "{{ route('documents.index') }}",

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
                    @if(auth()->user()->role == 'admin')
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
