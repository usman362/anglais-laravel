<!-- MAIN-SIDEBAR -->
<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1">
            <div class="sidemenu-logo p-0">
                <a class="main-logo" href="{{route('home')}}">
                    <img src="{{ asset('frontend/assets/images/logo/agape-gif.gif') }}" class="header-brand-img desktop-logo-dark"
                        alt="logo">
                    <img src="{{ asset('frontend/assets/images/logo/agape-gif.gif') }}" class="header-brand-img icon-logo-dark"
                        alt="logo">
                    <img src="{{ asset('frontend/assets/images/logo/agape-gif.gif') }}" class="header-brand-img desktop-logo"
                        alt="logo">
                    <img src="{{ asset('frontend/assets/images/logo/agape-gif.gif') }}" class="header-brand-img icon-logo"
                        alt="logo">
                </a>
            </div>
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                    </svg></div>
                <ul class="menu-nav nav" style="margin-top:66px !important">

                    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'employee')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <img style="width: 30px;padding:0 2px;" src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" alt="">
                                <span class="sidemenu-label">Utilisateurs</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Utilisateurs</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('users-management.index') }}">Liste des utilisateurs</a>
                                </li>
                                 @if (auth()->user()->role == 'admin')
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{ route('users-management.create') }}">Créer un utilisateur</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <img style="width: 30px;padding:0 2px;" src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" alt="">
                            <span class="sidemenu-label">Documents</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1"><a href="javascript:void(0);">Documents</a></li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{ route('documents.index') }}">Liste des documents</a>
                            </li>
                            @if (auth()->user()->role == 'admin')
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('documents.create') }}">Créer un document</a>
                                </li>
                            @endif
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'employee')
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('payslip.List') }}">Bulletins de paie</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('followup.List') }}">Fiches de suivi</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('activity.List') }}">Rapports d’activité</a>
                                </li>
                            @endif
                            @if (auth()->user()->role == 'admin' || auth()->user()->role == 'client')
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('invoice.List') }}">Liste des factures</a>
                                </li>
                            @endif
                        </ul>
                    </li>

                    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'employee')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <img style="width: 30px;padding:0 2px;" src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" alt="">
                                <span class="sidemenu-label notranslate">Formation de sécurité</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub notranslate">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Formation de sécurité</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('formation-de-sécurité.index') }}">Liste du formation</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('formation-de-sécurité.create') }}">Créer un formation</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @if (auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <img style="width: 30px;padding:0 2px;" src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" alt="">
                                <span class="sidemenu-label notranslate">Planning</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub notranslate">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Planning</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('schedules.index') }}">Liste du planning</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('schedules.create') }}">Créer un planning</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <img style="width: 30px;padding:0 2px;" src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" alt="">
                            <span class="sidemenu-label">Interventions</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1"><a href="javascript:void(0);">Interventions</a></li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="{{ route('interventions.index') }}">Liste des interventions</a>
                            </li>
                            @if (auth()->user()->role == 'admin')
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('interventions.create') }}">Créer une intervention</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <img style="width: 30px;padding:0 2px;" src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" alt="">
                                <span class="sidemenu-label">Blogs</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Blogs</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('blogs.index') }}">Liste des blogs</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('blogs.create') }}">Créer un blog</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <img style="width: 30px;padding:0 2px;" src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" alt="">
                                <span class="sidemenu-label">Contrats</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Contrats</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('contracts.index') }}">Liste des contrats</a>
                                </li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('contracts.create') }}">Créer un contrat</a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if (auth()->user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <img style="width: 30px;padding:0 2px;" src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" alt="">
                                <span class="sidemenu-label">Contactez-nous</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="side-menu-label1"><a href="javascript:void(0);">Contactez-nous</a></li>
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('contact_us_list') }}">Contactez-nous</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @if (auth()->user()->role == 'employee' || auth()->user()->role == 'life_assistant' || auth()->user()->role == 'client')
                        <li class="nav-item">
                            <a class="nav-link with-sub" href="javascript:void(0);">
                                <img style="width: 30px;padding:0 2px;" src="{{ asset('frontend/assets/images/SMILEY-AGAPEÌ_-2.png') }}" alt="">
                                <span class="sidemenu-label">Messagerie</span>
                                <i class="angle fe fe-chevron-right"></i>
                            </a>
                            <ul class="nav-sub">
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('life_assistant_message') }}">Interne Agapé & Intervenants</a>
                                </li>
                                @if (auth()->user()->role == 'employee')
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{ route('employee_message') }}">Interne Agapé</a>
                                </li>
                                @endif
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
