<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="ps-4" style="margin-left:225px;">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">Formulir Edit Artikel</h1>
            <form action="/update-article/<?= $article['id']; ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $article['slug']; ?>">
                <input type="hidden" name="oldPhoto" value="<?= $article['photo']; ?>">
                <div class="mb-3">
                    <label for="articleTitle" class="form-label">Judul</label>
                    <input type="text" class="form-control form-input <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" id="articleTitle" name="title" value="<?= old('title', $article['title']); ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('title'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="articleContent" class="form-label">Isi Artikel</label>
                    <div class="row">
                        <div class="col-sm-9 mb-2">
                            <textarea class="form-control form-input <?= ($validation->hasError('content')) ? 'is-invalid' : ''; ?>" id="articleContent" rows="5" name="content"><?= old('content', $article['content']); ?></textarea>
                            <div class="invalid-feedback">
                                <?= $validation->getError('content'); ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img src="/img/<?= $article['photo']; ?>" alt="Article Photo" class="img-thumbnail img-preview">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="articlePhoto" class="form-label">Foto</label>
                    <input class="form-control form-input <?= ($validation->hasError('photo')) ? 'is-invalid' : ''; ?>" type="file" id="articlePhoto" name="photo" onchange="previewImage()" value="<?= old('photo', $article['photo']); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('photo'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="articleCategory" class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Select article category" id="articleCategory" name="category">
                        <option disabled selected>Pilih kategori:</option>
                        <option value="Aktivitas" <?= old('category', $article['category']) == 'Aktivitas' ? 'selected' : ''; ?>>Aktivitas</option>
                        <option value="Fakta Menarik" <?= old('category', $article['category']) == 'Fakta Menarik' ? 'selected' : ''; ?>>Fakta Menarik</option>
                        <option value="Penghargaan" <?= old('category', $article['category']) == 'Penghargaan' ? 'selected' : ''; ?>>Penghargaan</option>
                    </select>
                    <?php if (session()->getFlashdata('selected-msg')) : ?>
                        <div style="color: red; font-size: .875em; margin-top: .25rem;">
                            <?= session()->getFlashdata('selected-msg'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="articleAuthor" class="form-label">Penulis</label>
                    <input type="text" class="form-control form-input <?= ($validation->hasError('author')) ? 'is-invalid' : ''; ?>" id="articleAuthor" name="author" value="<?= old('author', $article['author']); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('author'); ?>
                    </div>
                </div>
                <!-- Add Article Trigger -->
                <button type="submit" class="btn btn-admin">Edit</button>
                <!-- <button type="button" class="btn btn-admin" data-bs-toggle="modal" data-bs-target="#addArticleModal">Tambah</button> -->
                <!-- Add Article Modal -->
                <!-- <div class="modal fade" id="addArticleModal" tabindex="-1" aria-labelledby="addArticleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center mt-3">
                                <h3>Perhatian</h3>
                                <p>Apakah Anda yakin ingin menambah artikel?</p>
                            </div>
                            <div class="modal-footer btn-group p-0">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                                <button type="submit" class="btn btn-light">Ya</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>