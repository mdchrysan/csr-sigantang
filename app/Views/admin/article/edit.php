<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="ps-4" style="margin-left:225px;">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">Formulir Edit Artikel</h1>
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
                <!-- Edit Article Trigger -->
                <button type="button" class="btn btn-admin" data-bs-toggle="modal" data-bs-target="#editArticleModal">Edit</button>
                <!-- Edit Article Modal -->
                <div class="modal fade" id="editArticleModal" tabindex="-1" aria-labelledby="editArticleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center mt-3">
                                <h3>Perhatian</h3>
                                <p>Apakah Anda yakin ingin mengedit artikel?</p>
                            </div>
                            <div class="modal-footer btn-group p-0">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                                <button type="submit" class="btn btn-light">Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>