@extends('layouts.app')
@section('title', 'Edit Document')
@section('content')

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body" data-select2-id="18">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Edit Document</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Documents</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                                    <h6 class="main-content-label tx-15">Edit Document</h6>
                                </div>
                            </div>
                            <div class="card-body" data-select2-id="14">
                                {{-- needs-validation was-validated --}}
                                <form class="row g-3" action="{{ route('documents.update', @$document->id) }}" novalidate=""
                                    method="POST" data-select2-id="13" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row row-sm">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <label for="title" class="form-label tx-semibold">Document
                                                        name</label>
                                                    <input type="text" name="title" class="form-control mb-4"
                                                        id="title" value="{{ old('title', @$document->title) }}"
                                                        required="">
                                                    <label for="user_id" class="form-label tx-semibold">Select User</label>
                                                    <select name="user_id" class="form-control notranslate mb-4"
                                                        id="user_id" required>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}" @selected(old('user_id', @$document->user_id) == $user->id)>
                                                                {{ $user->name . ' (' . $user->role . ')' }}</option>
                                                        @endforeach
                                                    </select>
                                                    <label for="file" class="form-label tx-semibold">Document
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
