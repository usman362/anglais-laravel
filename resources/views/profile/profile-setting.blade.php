@extends('layouts.app')
@section('title', 'Profile Setting')
@section('content')
    <style>
        .btn-success {
            color: #000 !important;
            background-color: #ffeced !important;
            border-color: #ffeced !important;
        }

        .dropify-wrapper{
            background-color: #ffeced !important;
        }
    </style>
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
                        <div class="card custom-card" style="background-color:#fff37f">
                            <div class="card-body">
                                <div class="panel profile-cover">
                                    <div class="profile-cover__img">
                                        <img src="{{ Chatify::getUserWithAvatar(Auth::user())->avatar }}" alt="img">
                                    </div>
                                    <div class="profile-info notranslate">
                                        <h3 class="tx-medium">{{ Auth::user()->name }}</h3>
                                        <h6 class="tx-normal">{{ Auth::user()->email }}</h6>
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
                        <div class="card custom-card main-content-body-profile" style="background-color:#fff37f">
                            <div class="tab-content">
                                <div class="main-content-body tab-pane p-4 border-top-0 active" id="edit">
                                    <div class="card custom-card border" style="background-color:#055f45">
                                        <div class="card-body">
                                            <div class="mb-4 main-content-label text-white">Personal Information</div>
                                            <form class="form-horizontal" action="{{ route('profile.store') }}"
                                                enctype="multipart/form-data" method="POST">
                                                @csrf

                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label text-white">Image</label>
                                                        </div>
                                                        <div class="col-md-10">

                                                            @if (\App\Models\User::find(Auth::id())->avatar !== 'avatar.png')
                                                                <input type="file" id="image" name="avatar"
                                                                    accept="image/*" class="dropify mb-4" data-height="200"
                                                                    required
                                                                    data-default-file="{{ asset('storage/users-avatar/' . \App\Models\User::find(Auth::id())->avatar) }}" />
                                                            @else
                                                                <input type="file" id="image" name="avatar"
                                                                    accept="image/*" class="dropify mb-4" data-height="200"
                                                                    required />
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-4 main-content-label text-white">Name</div>

                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label text-white">First Name</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                placeholder="First Name" name="first_name"
                                                                value="{{ explode(' ', Auth::user()->name, 2)[0] }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label text-white">last Name</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                placeholder="Last Name" name="last_name"
                                                                value="{{ explode(' ', Auth::user()->name, 2)[1] }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4 main-content-label text-white">Contact Info</div>
                                                {{-- <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label text-white">Email<i>(required)</i></label>
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
                                                            <label class="form-label text-white">Phone</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                placeholder="phone number" name="phone"
                                                                value="{{ Auth::user()->phone }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-2">
                                                            <label class="form-label text-white">Address</label>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" name="address" rows="2" placeholder="Address">{{ Auth::user()->address }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="btn ripple btn-success w-sm float-end">Save</button>
                                            </form>
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
