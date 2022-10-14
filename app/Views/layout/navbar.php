<!-- <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/logo-no-bg.png" alt="Logo" width="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLP" aria-controls="navbarLP" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarLP">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<--?= base_url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<--?= base_url('/article'); ?>">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<--?= base_url('/gallery'); ?>">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<--?= base_url('/#lokasi'); ?>">Lokasi</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="landing-navbar">
    <div class="container">
        <a class="navbar-brand" href="#masthead-beranda"><img src="/img/logo-no-bg.png" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#landing-nav" aria-controls="landing-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="landing-nav">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/'); ?>">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/article'); ?>">Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/gallery'); ?>">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/#lokasi'); ?>">Lokasi</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/login'); ?>">Login</a></li>
            </ul>
        </div>
    </div>
</nav>