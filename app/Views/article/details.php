<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="curr-article">
    <div class="content-head">
        <h1 id="curr-article-title"><?= $article['title']; ?></h1>
        <h6 id="curr-article-date"><span><?= $article['category']; ?></span> | <span><?= date('j F Y | H:i', strtotime($article['updated_at'])); ?> WIB</span></h6>
    </div>
    <div id="curr-article-img">
        <img src="/img/<?= $article['photo']; ?>" class="curr-img" alt="article image">
    </div>
    <div id="curr-article-desc">
        <p id="curr-author">Penulis: <?= $article['author']; ?></p>
        <p><?= $article['content']; ?></p>
    </div>
</div>
<?= $this->endSection(); ?>