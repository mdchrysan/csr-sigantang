<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="content-title">
        <h1 id="curr-article-title">Judul Artikel</h1>
        <h6 id="curr-article-date">Tanggal Publikasi</h6>
    </div>
    <div id="curr-article-img">
        <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img-top" alt="article image">
    </div>
    <div id="curr-article-desc">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat harum quam doloremque, praesentium quos rem excepturi! Molestias culpa pariatur corporis ea, dicta itaque, est ex quod tenetur fuga, minima rem.</p>
    </div>
</div>
<?= $this->endSection(); ?>