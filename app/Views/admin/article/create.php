<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="ps-4" style="margin-left:225px;">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">Formulir Tambah Artikel</h1>
            <form action="">
                <div class="mb-3">
                    <label for="articleTitle" class="form-label">Judul</label>
                    <input type="text" class="form-control form-input" id="articleTitle">
                </div>
                <div class="mb-3">
                    <label for="articleContent" class="form-label">Isi Artikel</label>
                    <textarea class="form-control form-input" id="articleContent" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="articlePhoto" class="form-label">Foto</label>
                    <input class="form-control form-input" type="file" id="articlePhoto">
                </div>
                <div class="mb-3">
                    <label for="articleAuthor" class="form-label">Penulis</label>
                    <input type="text" class="form-control form-input" id="articleAuthor">
                </div>
                <button type="submit" class="btn btn-admin">Tambah</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>