<!-- <nav class="navbar navbar-expand-lg fixed-top py-3 px-4" id="admin-navbar">
    <div class="container">
        <p class="me-auto my-auto text-uppercase">Sigantang</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#admin-navbar-content" aria-controls="admin-navbar-content" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fas fa-tree"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="admin-navbar-content">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-3">
                    <a class="nav-link" href="#">
                        Halo, <span>Admin</span>!
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/'); ?>"><i class="fa-solid fa-right-from-bracket"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<nav class="topnav navbar navbar-expand navbar-dark">
    <p class="me-auto my-auto" href="#">Sigantang</p>
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Pengaturan</a></li>
                <li><a class="dropdown-item" href="#!">Notifikasi</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="<?= base_url('/'); ?>"><i class="fa-solid fa-right-from-bracket"></i> Keluar</a></li>
            </ul>
        </li>
    </ul>
</nav>