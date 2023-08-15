<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <img src="{{ asset('admin/dist/images/LOGO_BAITUL_MALL.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-2" style="opacity: .8">
        <span class="brand-text">Baitul Mall Klangenan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a class="d-block">{{ Auth::User()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link @yield('dashboard')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item @yield('data.master')">
                    <a href="#" class="nav-link @yield('nav.master')">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Data Master
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        {{-- muzaki --}}
                        {{-- <li class="nav-item">
                            <a href="{{ route('admin.muzaki.index') }}" class="nav-link @yield('muzaki')">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <p>Data Muzaki</p>
                            </a>
                        </li> --}}
                        {{-- expenditure --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.expenditure.index') }}" class="nav-link @yield('expenditure')">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <p>Data Pengeluaran</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @yield('data.kas')">
                    <a href="#" class="nav-link @yield('nav.kas')">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Kas Masjid
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        {{-- income --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.income.index') }}" class="nav-link @yield('income')">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <p>Data Pemasukan</p>
                            </a>
                        </li>
                        {{-- expenditure --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.expenditure.index') }}" class="nav-link @yield('expenditure')">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <p>Data Pengeluaran</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @yield('data')">
                    <a href="#" class="nav-link @yield('nav')">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        {{-- user --}}
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}" class="nav-link @yield('user')">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bars nav-icon"></i>
                                <p>Data User</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
