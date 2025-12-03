@extends('layouts.frontend')
@section('title', 'Blogs')
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image pt-0 pb-0" style="background-image: url({{asset('assets/img/files/img1.jpg')}})">
        <div style="background-color:#00000070;padding-top: 153px;padding-bottom: 153px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-12 breadcrumb-1">
                        <h1 class="title">Latest Blogs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <!-- rts blog grid area -->
    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 col-sm-12 col-12 pr--40 pr_md--0 pr_sm-controler--0">
                    <div class="row g-5">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <!-- start blog grid inner -->
                                <div class="blog-grid-inner notranslate">
                                    <div class="blog-header">
                                        <a class="thumbnail" href="{{ route('blog_details', $blog->uuid) }}">
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Business_Blog">
                                        </a>
                                        <div class="blog-info">
                                            <div class="user">
                                                <i class="fal fa-user-circle"></i>
                                                <span>by {{ $blog->user->name ?? 'N/A' }}</span>
                                            </div>
                                            {{-- <div class="user">
                                                <i class="fal fa-tags"></i>
                                                <span>Business</span>
                                            </div> --}}
                                        </div>
                                        <div class="date">
                                            <h6 class="title">{{ $blog->created_at->format('d') }}</h6>
                                            <span>{{ $blog->created_at->format('M') }}</span>
                                        </div>
                                    </div>
                                    <div class="blog-body">
                                        <a href="{{ route('blog_details', $blog->uuid) }}">
                                            <h5 class="title">
                                                {{ $blog->title ?? 'N/A' }}
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- end blog grid inner -->
                            </div>
                        @endforeach
                    </div>

                    @if ($blogs->hasPages())
                        <!-- pagination area -->
                        <div class="row mt--30">
                            <div class="col-12">
                                <div class="text-center">
                                    <div class="pagination">
                                        @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                            <a href="{{ $i == $blogs->currentPage() ? 'javascript:void(0)' : $blogs->url($i) }}"
                                                class="{{ $i == $blogs->currentPage() ? 'active' : '' }}">
                                                {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}
                                            </a>
                                        @endfor

                                        @if ($blogs->currentPage() < $blogs->lastPage())
                                            <a href="{{ $blogs->nextPageUrl() }}">
                                                <i class="fal fa-angle-double-right"></i>
                                            </a>
                                        @endif
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- pagination area End -->
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- rts blog grid area end -->
@endsection
