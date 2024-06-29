<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('customer.kriteria') }}" class="brand-link">

        <span class="brand-text font-weight-light">SPK PEMILIHAN</span>
        <br>
        <span class="brand-text font-weight-light">LAMPU TERBAIK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">


        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('customer.kriteria') }}" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Kriteria
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.alternatif') }}" class="nav-link">
                        <i class="nav-icon fas fa-lightbulb"></i>
                        <p>
                            Daftar Lampu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.comparisons') }}" class="nav-link">
                        <i class="nav-icon fas fa-code"></i>
                        <p>
                            Perbandingan Kriteria
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.hasil') }}" class="nav-link">
                        <i class="nav-icon fas fa-code"></i>
                        <p>
                            Hasil Perbandingan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.bobotalternatif') }}" class="nav-link">
                        <i class="nav-icon fas fa-code"></i>
                        <p>
                            Hasil Bobot Lampu
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.perangkingan') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Perangkingan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
