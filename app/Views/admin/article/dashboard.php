<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<!-- <div id="layoutSidenav_content">
    <main class="container">
        <div class="row my-4"> -->
<div class="ps-4" style="margin-left: 225px;">
    <main>
        <div class="row">
            <div class="col-10">
                <h1 class="my-3">Daftar Artikel</h1>
                <!-- <div class="col-lg-6 col-sm-6 d-grid gap-2 d-md-flex justify-content-md-end"> -->
                <div class="col-lg-5 col-sm-6 mb-3">
                    <a href="create-article" class="btn btn-admin" id="btnTambah">Tambah Artikel</a>
                </div>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <div class="mb-4 table-container">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Status</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- multiplier based on perPage paginate on controller -->
                            <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                            <?php foreach ($article as $a) : ?>
                                <tr>
                                    <td scope="row"><?= $i++; ?></td>
                                    <td><?= date('d-M-y H:i:s', strtotime($a['updated_at'])); ?></td>
                                    <td><?= $a['title']; ?></td>
                                    <td><?= $a['author']; ?></td>
                                    <td>
                                        <div class="text-wrap"><?= $a['status']; ?></div>
                                    </td>
                                    <!-- Article Details Trigger -->
                                    <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#articleModal<?= $a['id']; ?>">Lihat</button></td>
                                    <!-- Article Details Modal -->
                                    <div class="modal fade" id="articleModal<?= $a['id']; ?>" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="modal-title" id="articleModalLabel">
                                                        <h3><?= $a['title']; ?></h3>
                                                        <p class="small mb-0"><?= date('d F Y', strtotime($a['created_at'])); ?></p>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="/img/<?= $a['photo']; ?>" class="card-img" alt="gallery image">
                                                    <p><?= $a['content']; ?></p>
                                                    <p>Kategori: <?= $a['category']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Action Button -->
                                    <td>
                                        <div class="btn-group">
                                            <!-- Superadmin Upload Button -->
                                            <?php if (session()->id_role == 1) : ?>
                                                <!-- Upload Trigger -->
                                                <button type="button" class="btn btn-success"><i class="fa-solid fa-arrow-up-from-bracket" data-bs-toggle="modal" data-bs-target="#uploadModal<?= $a['id']; ?>"></i></i></button>
                                                <!-- Upload Modal -->
                                                <div class="modal fade" id="uploadModal<?= $a['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center mt-3">
                                                                <h3>Perhatian</h3>
                                                                <p>Apakah Anda yakin ingin mengunggah artikel?</p>
                                                            </div>
                                                            <form action="/upload-article/<?= $a['id']; ?>" method="POST">
                                                                <?= csrf_field(); ?>
                                                                <div class="modal-footer btn-group p-0">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                                                                    <button type="submit" class="btn btn-light">Ya</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif ?>
                                            <!-- Edit Button -->
                                            <a role="button" class="btn btn-warning" href="/edit-article/<?= $a['slug']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <!-- Delete Modal -->
                                            <div class="modal fade" id="deleteModal<?= $a['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center mt-3">
                                                            <h3>Perhatian</h3>
                                                            <p>Apakah Anda yakin ingin menghapus artikel?</p>
                                                        </div>
                                                        <!-- spoofing -->
                                                        <form action="/delete-article/<?= $a['id']; ?>" method="POST" class="d-inline">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <div class="modal-footer btn-group p-0">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                                                                <button class="btn btn-light" type="submit">Ya</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Delete Trigger -->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $a['id']; ?>"><i class="fa-regular fa-trash-can"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <?= $pager->links('article', 'admin_pagination') ?>
                </div>
            </div>
        </div>
    </main>
</div>
<?= $this->endSection(); ?>