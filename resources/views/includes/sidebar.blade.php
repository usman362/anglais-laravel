<!-- MAIN-SIDEBAR -->
<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1">
            <div class="sidemenu-logo">
                {{-- <a class="main-logo" href="https://laravelui.spruko.com/dashplex">
                    <img src="{{ asset('assets/img/brand/logo-light.png') }}" class="header-brand-img desktop-logo-dark"
                        alt="logo">
                    <img src="{{ asset('assets/img/brand/icon-light.png') }}" class="header-brand-img icon-logo-dark"
                        alt="logo">
                    <img src="{{ asset('assets/img/brand/logo.png') }}" class="header-brand-img desktop-logo"
                        alt="logo">
                    <img src="{{ asset('assets/img/brand/icon.png') }}" class="header-brand-img icon-logo"
                        alt="logo">
                </a> --}}
                <a href="javascript:void(0)" class="text-white">
                    <h4 class="m-4"> Dashboard</h4>
                </a>
            </div>
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                    </svg></div>
                <ul class="menu-nav nav">

                    @if (auth()->user()->role == 'admin')
                        <li class="nav-header"><span class="nav-label">Users Management</span></li>
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M21.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M8.5,21H3v-5.5h5.5V21z M8.5,14.5H3v-5h5.5V14.5z M8.5,8.5H3V3h5.5V8.5z M14.5,21h-5v-5.5h5V21z M14.5,14.5h-5v-5h5V14.5z M14.5,8.5h-5V3h5V8.5z M21,21h-5.5v-5.5H21V21z M21,14.5h-5.5v-5H21V14.5z M21,8.5h-5.5V3H21V8.5z" />
                                </svg>
                                <span class="sidemenu-label">Users</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Users</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('users-management.index') }}">Users List</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('users-management.create') }}">Users
                                        Create</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path
                                    d="M21.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M8.5,21H3v-5.5h5.5V21z M8.5,14.5H3v-5h5.5V14.5z M8.5,8.5H3V3h5.5V8.5z M14.5,21h-5v-5.5h5V21z M14.5,14.5h-5v-5h5V14.5z M14.5,8.5h-5V3h5V8.5z M21,21h-5.5v-5.5H21V21z M21,14.5h-5.5v-5H21V14.5z M21,8.5h-5.5V3H21V8.5z" />
                            </svg>
                            <span class="sidemenu-label">Documents</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1"><a href="javascript:void(0);">Documents</a></li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{ route('documents.index') }}">Documents List</a>
                            </li>
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'client')
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('documents.create') }}">Documents Create</a>
                                </li>
                            @endif
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'employee')
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('payslip.List') }}">Payslips</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('followup.List') }}">Follow-up sheets</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('activity.List') }}">Activity reports</a>
                                </li>
                            @endif
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'client')
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('invoice.List') }}">Invoice List</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M21.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M8.5,21H3v-5.5h5.5V21z M8.5,14.5H3v-5h5.5V14.5z M8.5,8.5H3V3h5.5V8.5z M14.5,21h-5v-5.5h5V21z M14.5,14.5h-5v-5h5V14.5z M14.5,8.5h-5V3h5V8.5z M21,21h-5.5v-5.5H21V21z M21,14.5h-5.5v-5H21V14.5z M21,8.5h-5.5V3H21V8.5z" />
                                </svg>
                                <span class="sidemenu-label">Schedules</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Schedules</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('schedules.index') }}">Schedules List</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('schedules.create') }}">Schedules Create</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @if (auth()->user()->role == 'client' || auth()->user()->role == 'employee')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M21.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M8.5,21H3v-5.5h5.5V21z M8.5,14.5H3v-5h5.5V14.5z M8.5,8.5H3V3h5.5V8.5z M14.5,21h-5v-5.5h5V21z M14.5,14.5h-5v-5h5V14.5z M14.5,8.5h-5V3h5V8.5z M21,21h-5.5v-5.5H21V21z M21,14.5h-5.5v-5H21V14.5z M21,8.5h-5.5V3H21V8.5z" />
                                </svg>
                                <span class="sidemenu-label">Interventions</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Interventions</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('interventions.index') }}">Interventions
                                        List</a>
                                </li>
                                @if (auth()->user()->role == 'client')
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="{{ route('interventions.create') }}">Interventions
                                            Create</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M21.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M8.5,21H3v-5.5h5.5V21z M8.5,14.5H3v-5h5.5V14.5z M8.5,8.5H3V3h5.5V8.5z M14.5,21h-5v-5.5h5V21z M14.5,14.5h-5v-5h5V14.5z M14.5,8.5h-5V3h5V8.5z M21,21h-5.5v-5.5H21V21z M21,14.5h-5.5v-5H21V14.5z M21,8.5h-5.5V3H21V8.5z" />
                                </svg>
                                <span class="sidemenu-label">Blogs</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Blogs</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('blogs.index') }}">Blog List</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('blogs.create') }}">Blog Create</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if (auth()->user()->role == 'client')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                    enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path
                                        d="M21.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M8.5,21H3v-5.5h5.5V21z M8.5,14.5H3v-5h5.5V14.5z M8.5,8.5H3V3h5.5V8.5z M14.5,21h-5v-5.5h5V21z M14.5,14.5h-5v-5h5V14.5z M14.5,8.5h-5V3h5V8.5z M21,21h-5.5v-5.5H21V21z M21,14.5h-5.5v-5H21V14.5z M21,8.5h-5.5V3H21V8.5z" />
                                </svg>
                                <span class="sidemenu-label">Contracts</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Contracts</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('contracts.index') }}">Contract List</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('contracts.create') }}">Contract
                                        Create</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <div class="slide-right" id="slide-right">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN-SIDEBAR -->
