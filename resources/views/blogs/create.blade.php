@extends('layouts.app')
@section('title', 'Add Blog')
@section('content')

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body" data-select2-id="18">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Add Blog</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Blogs</a></li>
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
                                    <h6 class="main-content-label tx-15">Add Blog</h6>
                                </div>
                            </div>
                            <div class="card-body" data-select2-id="14">
                                {{-- needs-validation was-validated --}}
                                <form class="row g-3" action="{{ route('blogs.store') }}" novalidate="" method="POST"
                                    enctype="multipart/form-data" data-select2-id="13">
                                    @csrf
                                    <div class="row row-sm">

                                        <div class="col-lg-12 col-md-12">
                                            <div class="card custom-card">

                                                <div class="card-body">
                                                    <label for="title" class="form-label tx-semibold">Title</label>
                                                    <input type="text" name="title" class="form-control mb-4"
                                                        id="title" value="{{ old('title', @$blog->title) }}"
                                                        required="">

                                                    <label for="content" class="form-label tx-semibold">Content</label>
                                                    <textarea id="content" name="content">
                                                        {{ old('content', @$blog->content) }}
                                                    </textarea>
                                                    <br>
                                                    <label for="image" class="form-label tx-semibold">Image
                                                        Upload</label>
                                                    <input type="file" id="image" name="image" accept="image/*"
                                                        class="dropify mb-4" data-height="200" />
                                                    <label class="custom-switch" for="is_published">
                                                        <input type="checkbox" id="is_published" name="is_published"
                                                            class="custom-switch-input">
                                                        <span class="custom-switch-indicator"></span>
                                                        <span class="custom-switch-description">Publish</span>
                                                    </label>
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

@push('scripts')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });
    </script>
@endpush
