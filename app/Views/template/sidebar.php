<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="landing_page/assets/img/ayam1.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem Pakar</span>
    </a>

    <div class="sidebar">


        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('admin/dashboard') ?>" class="nav-link" style="background-color: <?= (service('request')->uri->getSegment(2) == 'dashboard') ? "#007bff" : "transparent" ?>">
                        <i class="nav-icon fa fa-home" aria-hidden="true"></i>
                        <p>
                            Beranda
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/gejala') ?>" class="nav-link" style="background-color: <?= (service('request')->uri->getSegment(2) == 'gejala') ? "#007bff" : "transparent" ?>">
                        <i class="nav-icon fas fa-viruses"></i>
                        <p>
                            Data Gejala
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/penyakit') ?>" class="nav-link" style="background-color: <?= (service('request')->uri->getSegment(2) == 'penyakit') ? "#007bff" : "transparent" ?>">
                        <i class="nav-icon fas fa-briefcase-medical"></i>
                        <p>
                            Data Penyakit
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/relasi') ?>" class="nav-link" style=" background-color: <?= (service('request')->uri->getSegment(2) == 'relasi') ? "#007bff" : "transparent" ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Relasi
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/diagnosa') ?>" class="nav-link" style=" background-color: <?= (service('request')->uri->getSegment(2) == 'diagnosa') ? "#007bff" : "transparent" ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Data Diagnosa
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                <li class="nav-item" data-segment="logout">
                    <a href="<?= base_url('logout') ?>" class="nav-link" id="sa-warning">
                        <i class="nav-icon fas fa-arrow-right"></i>
                        <p>
                            Logout
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
            </ul>

        </nav>
    </div>


</aside>