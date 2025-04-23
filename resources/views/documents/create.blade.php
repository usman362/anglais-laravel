@extends('layouts.app')
@section('title', 'Add '.$name)
@section('content')

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body" data-select2-id="18">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Add {{$name}}</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">{{$name}}s</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                                    <h6 class="main-content-label tx-15">Add {{$name}}</h6>
                                </div>
                            </div>
                            <div class="card-body" data-select2-id="14">
                                {{-- needs-validation was-validated --}}
                                <form class="row g-3" action="{{ route('documents.store') }}" novalidate="" method="POST"
                                    data-select2-id="13" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="type" id="type" value="{{ $type }}" />
                                    <div class="row row-sm">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <label for="title" class="form-label tx-semibold">{{$name}}
                                                        name</label>
                                                    <input type="text" name="title" class="form-control mb-4"
                                                        id="title" value="{{ old('title', @$document->title) }}"
                                                        required="">
                                                    <label for="file" class="form-label tx-semibold">{{$name}}
                                                        file</label>
                                                    <input type="file" id="file" name="file" required
                                                        class="dropify mb-4" data-height="200" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit form</button>
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
