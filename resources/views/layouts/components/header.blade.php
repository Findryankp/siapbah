<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="{{ '/' }}" class="logo logo-dark">
                        <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-white-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-white-sm.png') }}" alt="" height="17">
                        </span>
                    </a>
                    <a href="{{ '/' }}" class="logo logo-light">
                        <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-white-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-white-sm.png') }}" alt="" height="17">
                        </span>
                    </a>
                </div>
                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                     <span class="hamburger-icon">
                     <span></span>
                     <span></span>
                     <span></span>
                     </span>
                </button>
                <!-- App Search-->
                <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                               id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                              id="search-close-options"></span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                        <div data-simplebar style="max-height: 320px;">
                            <!-- item-->
                            <div class="dropdown-header">
                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                            </div>
                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="{{ '/' }}" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i
                                        class="mdi mdi-magnify ms-1"></i></a>
                                <a href="{{ '/' }}" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i
                                        class="mdi mdi-magnify ms-1"></i></a>
                            </div>
                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                            </div>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                <span>Analytics Dashboard</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                <span>Help Center</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                <span>My account settings</span>
                            </a>
                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                            </div>
                            <div class="notification-list">
                                <!-- item -->
                                <a href="javascript:void(0);" class="d-flex dropdown-item notify-item py-2">
                                    <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="me-3 rounded-circle avatar-xs"
                                         alt="user-pic">
                                    <div class="flex-1">
                                        <h6 class="m-0">Angela Bernier</h6>
                                        <span class="fs-11 mb-0 text-muted">Manager</span>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="d-flex dropdown-item notify-item py-2">
                                    <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" class="me-3 rounded-circle avatar-xs"
                                         alt="user-pic">
                                    <div class="flex-1">
                                        <h6 class="m-0">David Grasso</h6>
                                        <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="javascript:void(0);" class="d-flex dropdown-item notify-item py-2">
                                    <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" class="me-3 rounded-circle avatar-xs"
                                         alt="user-pic">
                                    <div class="flex-1">
                                        <h6 class="m-0">Mike Bunch</h6>
                                        <span class="fs-11 mb-0 text-muted">React Developer</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-center pt-3 pb-1">
                            <a href="#" class="btn btn-primary btn-sm">View All Results <i
                                    class="ri-arrow-right-line ms-1"></i></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                           aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                            data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode shadow-none">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>
                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <i class='bx bx-bell fs-22'></i>
                        <span
                            class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">0<span
                                class="visually-hidden">unread messages</span></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                    <div class="col-auto dropdown-tabs">
                                        <span class="badge badge-soft-light fs-13"> 0 New</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-2 pt-2">
                                <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true"
                                    id="notificationItemsTab" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab"
                                           aria-selected="true">
                                            All (0)
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab"
                                           aria-selected="false">
                                            Messages
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab"
                                           aria-selected="false">
                                            Alerts
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="my-3 text-center">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                 aria-labelledby="messages-tab">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <div class="my-3 text-center">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab">
                                <div class="w-25 w-sm-50 pt-3 mx-auto">
                                    <img src="{{ asset('assets/images/svg/bell.svg') }}" class="img-fluid" alt="user-pic">
                                </div>
                                <div class="text-center pb-5 mt-2">
                                    <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                        <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/icon-user.png') }}"
                             alt="Header Avatar">
                        <span class="text-start ms-xl-2">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{ Auth::user()->roles->first()->name }}</span>
                        </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>
                        <a class="dropdown-item" href="{{ url('users-edit-password') }}"><i
                                class="mdi mdi-form-textbox-password text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Edit Password</span></a>
                        <a class="dropdown-item" href="{{ url('activity-log') }}"><i
                                class="mdi mdi-history text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Activity Log</span></a>
                        <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" key="t-logout">Logout</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
