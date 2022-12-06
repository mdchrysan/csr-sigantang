<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content" id="article-section">
    <div class="content-head text-center">
        <h1>Seputar Sigantang</h1>
    </div>
    <!-- Search Bar: postpone -->
    <!-- <div class="container-fluid">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari Artikel" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
    </div> -->
    <div class="row row-cols-1 row-cols-md-3 g-4 p-4">
        <?php foreach ($article as $a) : ?>
            <div class="col">
                <a href="/article/<?= $a['slug']; ?>" class="card h-100 card-link">
                    <img src="/img/<?= $a['photo']; ?>" class="card-img-top" alt="article image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $a['title']; ?></h5>
                        <p class="card-date"><?= date('j M Y', strtotime($a['updated_at'])); ?></p>
                        <div class="card-category">
                            <p><?= $a['category']; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</section>
<?= $this->endSection(); ?>