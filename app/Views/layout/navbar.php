<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="landing-navbar">
    <div class="container">
        <a class="navbar-brand" href="#masthead-beranda"><img src="/img/logo-no-bg.png" alt="logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#landing-nav" aria-controls="landing-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-tree"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="landing-nav">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/'); ?>">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/profile'); ?>">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/article'); ?>">Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/gallery'); ?>">Galeri</a></li>
                <?php if (session()->id_role == '') : ?>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/login'); ?>"><i class="fas fa-sign-in-alt"></i></a></li>
                <?php else : ?>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/article-list'); ?>"><i class="fas fa-sign-in-alt"></i></a></li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>