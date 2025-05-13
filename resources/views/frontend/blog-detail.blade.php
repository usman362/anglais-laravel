@extends('layouts.frontend')
@section('title', 'Post Detail')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Post Details</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{route('home')}}">Accueil</a>
                        <span> / </span>
                        <a href="#" class="active">Post Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts blog mlist area -->
    <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-md-12 col-sm-12 col-12">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by {{ $blog->user->name ?? 'N/A' }}</span>
                                </div>
                                <!-- single infoe end -->
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-clock"></i>
                                    <span>{{ $blog->created_at->format('d M Y') ?? 'N/A' }}</span>
                                </div>
                                <!-- single infoe end -->
                            </div>
                            <h3 class="title">{{ $blog->title ?? 'N/A' }}</h3>
                            {!! $blog->content !!}
                            <div class="author-area">
                                <div class="thumbnail details mb_sm--15">
                                    <img style="width: 150px; height:140px"
                                        src="{{ asset('storage/users-avatar/' . $blog->user->avatar) }}"
                                        alt="finbiz_buseness">
                                </div>
                                <div class="author-details team">
                                    <span>{{ $blog->user->designation ?? 'N/A' }}</span>
                                    <h5>{{ $blog->user->name ?? 'N/A' }}</h5>
                                    <p class="disc">
                                        {{ $blog->user->bio ?? 'N/A' }}
                                    </p>
                                </div>
                            </div>
                            {{--
                            Leave a Reply

                            <div class="replay-area-details">
                                <h4 class="title">Leave a Reply</h4>
                                <form action="#">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Your Name">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" placeholder="Select Topic">
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <a class="rts-btn btn-primary" href="#">Submit Message</a> --}}
                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
            </div>
        </div>
    </div>
    <!-- rts blog mlist area End -->
@endsection
