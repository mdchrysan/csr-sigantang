<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="ps-4" style="margin-left:225px;">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">Formulir Tambah Artikel</h1>
            <form action="/save-article" method="POST" enctype="multipart/form-data">
                <!-- <form action="/admin_article/save" method="POST"> -->
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="articleTitle" class="form-label">Judul</label>
                    <input type="text" class="form-control form-input <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="articleTitle" name="title" value="<?= old('title'); ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('title'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="articleContent" class="form-label">Isi Artikel</label>
                    <div class="row">
                        <div class="col-sm-9 mb-2">
                            <textarea class="form-control form-input <?= ($validation->hasError('content')) ? 'is-invalid' : ''; ?>" id="articleContent" rows="5" name="content"><?= old('content'); ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('content'); ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/default.png" alt="Article Photo" class="img-thumbnail img-preview">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="articlePhoto" class="form-label">Foto</label>
                    <input class="form-control form-input <?= ($validation->hasError('photo')) ? 'is-invalid' : ''; ?>" type="file" id="articlePhoto" name="photo" onchange="previewImage()" value="<?= old('photo'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('photo'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="articleCategory" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Select article category" id="articleCategory" name="category">
                        <option disabled selected>Pilih kategori:</option>
                        <option value="Aktivitas" <?= old('category') == 'Aktivitas' ? 'selected' : ''; ?>>Aktivitas</option>
                        <option value="Kunjungan" <?= old('category') == 'Kunjungan' ? 'selected' : ''; ?>>Kunjungan</option>
                        <option value="Penghargaan" <?= old('category') == 'Penghargaan' ? 'selected' : ''; ?>>Penghargaan</option>
                    </select>
                    <?php if (session()->getFlashdata('selected-msg')) : ?>
                        <div style="color: red; font-size: .875em; margin-top: .25rem;">
                            <?= session()->getFlashdata('selected-msg'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="articleAuthor" class="form-label">Penulis</label>
                    <input type="text" class="form-control form-input <?= ($validation->hasError('author')) ? 'is-invalid' : ''; ?>" id="articleAuthor" name="author" value="<?= old('author'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('author'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-admin">Tambah</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>