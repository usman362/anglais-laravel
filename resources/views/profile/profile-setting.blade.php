@extends('layouts.app')
@section('title', 'Profile Setting')
@section('content')

    <div class="main-content side-content pt-0">
        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- PAGE HEADER -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Profile</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- END PAGE HEADER -->

                <!-- ROW -->
                <div class="row row-sm">
                    <div class="col-xl-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="panel profile-cover">
                                    <div class="profile-cover__img">
                                        <img src="{{ asset('assets/img/users/6.jpg') }}" alt="img">
                                        {{-- <a href="javascript:;"><i class="mdi mdi-pencil"></i></a> --}}
                                    </div>
                                    <div class="profile-info">
                                        <h3 class="tx-medium">Dennis Mark</h3>
                                        <h6 class="tx-normal">dennis@spruko.com</h6>
                                    </div>

                                    <div class="profile-cover__action profile-img"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END ROW -->

                <!-- ROW -->
                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="card custom-card main-content-body-profile">
                            <div class="tab-content">
                                <div class="main-content-body tab-pane p-4 border-top-0 active" id="edit">
                                    <div class="card custom-card border">
                                        <div class="card-body">
                                            <div class="mb-4 main-content-label">Personal Information</div>
                                            <form class="form-horizontal" action="{{route('profile.store')}}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                <div class="mb-4 main-content-label">Profile Picture</div>

                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label">Image</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="file" id="image" name="image"
                                                                accept="image/*" class="dropify mb-4" data-height="200"
                                                                required
                                                                data-default-file="{{ asset('assets/img/users/6.jpg') }}" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4 main-content-label">Name</div>

                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label">First Name</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Name" value="Dennis">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label">last Name</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                placeholder="Last Name" value="Mark">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label">Designation</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                placeholder="Designation" value="Web Designer">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4 main-content-label">Contact Info</div>
                                                {{-- <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label">Email<i>(required)</i></label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control" placeholder="Email"
                                                                value="info@Dashplex.in">
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label">Phone</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                placeholder="phone number" value="+245 354 654">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label">Address</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" name="example-textarea-input" rows="2" placeholder="Address">San Francisco, CA</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4 main-content-label">About Yourself</div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label">Biographical Info</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" name="example-textarea-input" rows="4"
                                                                placeholder="Please say something about yourself"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer py-3">
                                            <button class="btn ripple btn-success w-sm float-end">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ROW -->
            </div>
        </div>
    </div>
@endsection
