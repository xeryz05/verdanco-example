<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img
                src="{{ asset('img/logo/verdanco-removebg-preview.png') }}"
                alt="veranco.png"
                style="height: 45px"
                class="mr-2 my-3"
            />
        </div>
        <div class="sidebar-brand sidebar-brand-sm my-3">
            <img
                src="{{ asset('img/logo/verdanco-title.png') }}"
                alt="verdanco.png"
                style="height: 30px"
            />
        </div>
        <ul class="sidebar-menu mt-3">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"
                    ><i class="fas fa-fire"></i><span>Dashboard</span></a
                >
                <ul class="dropdown-menu">
                    @role('admin')
                        <li class=" {{ (request()->is('/dashboard') ? 'active' : '') }} ">
                            <a class="nav-link" href="/dashboard">
                                Dashboard Admin
                            </a>
                        </li>
                    @endrole
                    <li class="active">
                        <a class="nav-link" href="{{ url('/dashboard') }}"
                            >Verdanco Indonesia</a
                        >
                    </li>
                    <li>
                        <a class="nav-link" href="index.html"
                            >Verdanco Engineering</a
                        >
                    </li>
                </ul>
            </li>
            <li class="menu-header">KPI Corporate</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"
                    ><i class="fas fa-columns"></i> <span>Revenue</span></a
                >
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="layout-default.html">2023</a>
                    </li>
                    <li>
                        <a class="nav-link" href="layout-transparent.html"
                            >2022</a
                        >
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"
                    ><i class="fas fa-th"></i> <span>Purchase Order</span></a
                >
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="bootstrap-alert.html">2023</a>
                    </li>
                    <li>
                        <a class="nav-link" href="bootstrap-badge.html">2022</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Track Project</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"
                    ><i class="fas fa-map-marker-alt"></i>
                    <span>Trace Project</span></a
                >
                <ul class="dropdown-menu">
                    <li>
                        <a href="gmaps-advanced-route.html">KPI Corporate</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"
                    ><i class="fas fa-plug"></i> <span>Aging Project</span></a
                >
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="modules-calendar.html"
                            >Data Aging Project</a
                        >
                    </li>
                    <li>
                        <a class="nav-link" href="modules-chartjs.html"
                            >Status Aging</a
                        >
                    </li>
                </ul>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="" class="btn btn-primary btn-lg btn-block btn-icon-split">
            </a>
        </div>
    </aside>
</div>
