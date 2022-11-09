<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="ps-4" style="margin-left:225px;">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">Daftar Foto</h1>
            <form action="/save-photo" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-lg-7 col-sm-6 mb-3">
                        <input class="form-control form-input" type="file" id="galleryPhoto">
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <!-- Add Photo Trigger -->
                        <button type="button" class="btn btn-admin" data-bs-toggle="modal" data-bs-target="#addPhotoModal">Tambah Foto</button>
                    </div>
                </div>
            </form>
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
                            <th scope="col">Nama File</th>
                            <th scope="col">Status</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>2022-3-5 28:12:10</td>
                            <td>desa_wisata.jpg</td>
                            <td>
                                <div class="bg-primary text-wrap">dalam proses</div>
                            </td>
                            <!-- Photo Details Trigger -->
                            <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#photoModal">Lihat</button></td>
                            <td class="btn-group">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#uploadPhotoModal"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePhotoModal"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>2022-3-5 28:12:10</td>
                            <td>desa_wisata.jpg</td>
                            <td>
                                <div class="bg-success text-wrap">terpublikasi</div>
                            </td>
                            <!-- Photo Details Trigger -->
                            <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#photoModal">Lihat</button></td>
                            <td class="btn-group">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#uploadPhotoModal"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePhotoModal"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>2022-3-5 28:12:10</td>
                            <td>desa_wisata.jpg</td>
                            <td>
                                <div class="bg-danger text-wrap">dihapus</div>
                            </td>
                            <!-- Photo Details Trigger -->
                            <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#photoModal">Lihat</button></td>
                            <td class="btn-group">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#uploadPhotoModal"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePhotoModal"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <?php $i = 1 ?>
                        <?php foreach ($photo as $p) : ?>
                            <tr>
                                <td scope="row"><?= $i++; ?></td>
                                <td><?= $p['created_at']; ?></td>
                                <td><?= $p['filename']; ?></td>
                                <td>
                                    <div class="text-wrap"><?= $a['status']; ?></div>
                                </td>
                                <!-- Photo Details Trigger -->
                                <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#photoModal<?= $p['id']; ?>">Lihat</button></td>
                                <!-- Photo Details Modal -->
                                <div class="modal fade" id="photoModal<?= $p['id']; ?>" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="photoModalLabel"><?= $p['filename']; ?></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="/img/<?= $p['filename']; ?>" class="card-img" alt="gallery image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Action Button -->
                                <td class="btn-group">
                                    <!-- Upload Trigger -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#uploadPhotoModal"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                                    <!-- Upload Photo Modal -->
                                    <div class="modal fade" id="uploadPhotoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="uploadPhotoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body text-center mt-3">
                                                    <h3>Perhatian</h3>
                                                    <p>Apakah Anda yakin ingin mengunggah foto?</p>
                                                </div>
                                                <div class="modal-footer btn-group p-0">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                                                    <button type="submit" class="btn btn-light">Ya</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Delete Trigger -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePhotoModal<?= $p['id']; ?>"><i class="fa-regular fa-trash-can"></i></button>
                                    <!-- Delete Photo Modal -->
                                    <div class="modal fade" id="deletePhotoModal<?= $p['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletePhotoModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body text-center mt-3">
                                                    <h3>Perhatian</h3>
                                                    <p>Apakah Anda yakin ingin menghapus foto?</p>
                                                </div>
                                                <div class="modal-footer btn-group p-0">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                                                    <button type="submit" class="btn btn-light">Ya</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Add Photo Modal -->
<div class="modal fade" id="addPhotoModal" tabindex="-1" aria-labelledby="addPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center mt-3">
                <h3>Perhatian</h3>
                <p>Apakah Anda yakin ingin menambah foto?</p>
            </div>
            <div class="modal-footer btn-group p-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-light">Ya</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>