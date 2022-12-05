<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="content" id="photo-gallery">
    <div>
        <h1>Galeri Foto</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 p-4">
        <div class="col">
            <div class="h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
            </div>
        </div>
        <div class="col">
            <div class="h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
            </div>
        </div>
        <div class="col">
            <div class="h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
            </div>
        </div>
        <div class="col">
            <div class="h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
            </div>
        </div>
        <div class="col">
            <div class="h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
            </div>
        </div>
        <div class="col">
            <div class="h-100">
                <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
            </div>
        </div>
        <?php foreach ($photo as $p) : ?>
            <div class="col">
                <div class="h-100">
                    <img src="/img/<?= $p['filename']; ?>" class="card-img" alt="gallery image">
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
<section class="content" id="instagram-photos">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-ca66650b-32c8-4b02-a2c2-a98bc63381a7"></div>
</section>
<?= $this->endSection(); ?>