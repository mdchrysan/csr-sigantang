<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content" id="article-section">
    <div class="content-title">
        <h1>Berita Terkini</h1>
    </div>
    <div class="container-fluid">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari Artikel" aria-label="Search">
            <!-- <button class="btn btn-outline-success" type="submit">Cari</button> -->
        </form>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 p-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img-top" alt="article image">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel</h5>
                    <p class="card-text">Tanggal Publikasi</p>
                </div>
            </div>
        </div>
        <div class="col">
            <a href="/article/details" class="card h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img-top" alt="article image">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel</h5>
                    <p class="card-text">Tanggal Publikasi</p>
                </div>
            </a>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img-top" alt="article image">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel</h5>
                    <p class="card-text">Tanggal Publikasi</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img-top" alt="article image">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel</h5>
                    <p class="card-text">Tanggal Publikasi</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img-top" alt="article image">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel</h5>
                    <p class="card-text">Tanggal Publikasi</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img-top" alt="article image">
                <div class="card-body">
                    <h5 class="card-title">Judul Artikel</h5>
                    <p class="card-text">Tanggal Publikasi</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>