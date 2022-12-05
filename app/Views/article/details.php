<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="content-title">
        <h1 id="curr-article-title"><?= $article['title']; ?></h1>
        <h6 id="curr-article-date"><?= date('d F Y | H:i', strtotime($article['updated_at'])); ?> WIB</h6>
    </div>
    <div id="curr-article-img">
        <img src="/img/<?= $article['photo']; ?>" class="card-img-top" alt="article image">
    </div>
    <div id="curr-article-desc">
        <p>Penulis: <?= $article['author']; ?></p>
        <p><?= $article['content']; ?></p>
    </div>
</div>
<?= $this->endSection(); ?>