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
                            <tr>
                                <td scope="row">1</td>
                                <td>2022-1-1 25:10:10</td>
                                <td>Desa Wisata</td>
                                <td>Budi</td>
                                <td>
                                    <div class="bg-primary text-wrap">dalam proses</div>
                                </td>
                                <!-- Article Details Trigger -->
                                <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#articleModal">Lihat</button></td>
                                <td class="btn-group">
                                    <!-- Upload Trigger -->
                                    <button type="button" class="btn btn-success"><i class="fa-solid fa-arrow-up-from-bracket" data-bs-toggle="modal" data-bs-target="#uploadModal"></i></i></button>
                                    <!-- Edit Button -->
                                    <a role="button" class="btn btn-warning" href="edit-article"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <!-- Delete Trigger -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>2022-1-1 25:10:10</td>
                                <td>Desa Wisata</td>
                                <td>Budi</td>
                                <td>
                                    <div class="bg-success text-wrap">disetujui</div>
                                </td>
                                <!-- Article Details trigger -->
                                <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#articleModal">Lihat</button></td>
                                <td class="btn-group">
                                    <!-- Upload Trigger -->
                                    <button type="button" class="btn btn-success"><i class="fa-solid fa-arrow-up-from-bracket" data-bs-toggle="modal" data-bs-target="#uploadModal"></i></i></button>
                                    <!-- Edit Button -->
                                    <a role="button" class="btn btn-warning" href="edit-article"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <!-- Delete Trigger -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>2022-1-1 25:10:10</td>
                                <td>Desa Wisata</td>
                                <td>Budi</td>
                                <td>
                                    <div class="bg-warning text-wrap">butuh diedit</div>
                                </td>
                                <!-- Article Details trigger -->
                                <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#articleModal">Lihat</button></td>
                                <td class="btn-group">
                                    <!-- Upload Trigger -->
                                    <button type="button" class="btn btn-success"><i class="fa-solid fa-arrow-up-from-bracket" data-bs-toggle="modal" data-bs-target="#uploadModal"></i></i></button>
                                    <!-- Edit Button -->
                                    <a role="button" class="btn btn-warning" href="edit-article"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <!-- Delete Trigger -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">4</td>
                                <td>2022-1-1 25:10:10</td>
                                <td>Desa Wisata</td>
                                <td>Budi</td>
                                <td>
                                    <div class="bg-danger text-wrap">dihapus</div>
                                </td>
                                <!-- Article Details trigger -->
                                <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#articleModal">Lihat</button></td>
                                <td class="btn-group">
                                    <!-- Upload Trigger -->
                                    <button type="button" class="btn btn-success"><i class="fa-solid fa-arrow-up-from-bracket" data-bs-toggle="modal" data-bs-target="#uploadModal"></i></i></button>
                                    <!-- Edit Button -->
                                    <a role="button" class="btn btn-warning" href="edit-article"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <!-- Delete Trigger -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Article Details Modal -->
        <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="articleModalLabel">
                            <h3>Judul Artikel</h3>
                            <p class="small mb-0">1 Januari 2022</p>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolor repellendus aspernatur ex aliquid itaque expedita, fugit neque animi harum eligendi similique earum, suscipit eum possimus cumque, corrupti porro! Laborum.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe perspiciatis nobis ex voluptate amet placeat ullam, modi tempora vel, eaque culpa ab doloremque sequi eveniet distinctio autem corporis reiciendis illo.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Upload Modal -->
        <div class="modal fade" id="uploadModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center mt-3">
                        <h3>Perhatian</h3>
                        <p>Apakah Anda yakin ingin mengunggah artikel?</p>
                    </div>
                    <div class="modal-footer btn-group p-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-light">Ya</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Modal -->
        <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center mt-3">
                        <h3>Perhatian</h3>
                        <p>Apakah Anda yakin ingin menghapus artikel?</p>
                    </div>
                    <div class="modal-footer btn-group p-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-light">Ya</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?= $this->endSection(); ?>