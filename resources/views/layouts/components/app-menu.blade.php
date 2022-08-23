<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <br>
        <a href="{{ url('dashboard') }}" class="logo logo-dark">
               <span class="logo-sm">
               <img src="{{ asset('assets/images/logo-white-sm.png') }}" alt="" height="20">
               </span>
            <span class="logo-lg">
               <img src="{{ asset('assets/images/logo-white.png') }}" alt="" height="20">
               </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ url('/') }}" class="logo logo-light">
               <span class="logo-sm">
               <img src="{{ asset('assets/images/logo-white-sm.png') }}" alt="" height="20">
               </span>
            <span class="logo-lg">
               <img src="{{ asset('assets/images/logo-white.png') }}" alt="" height="20">
               </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#dashboard" data-bs-toggle="collapse" role="button"
                       aria-expanded="true" aria-controls="dashboard">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-layouts">Home</span>
                    </a>
                    <div class="collapse menu-dropdown" id="dashboard">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link" data-key="t-1">Anggota</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @if(Auth::user()->roles->first()->name == 'Admin')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('users') }}">
                        <i class="ri-user-2-fill"></i> <span data-key="t-dashboards">Manage User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('activity-log') }}">
                        <i class="ri-flag-fill"></i> <span data-key="t-dashboards">Activity User</span>
                    </a>
                </li>
                @endif
                <!-- end Dashboard Menu -->
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
