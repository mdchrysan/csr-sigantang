<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="ps-4" style="margin-left:225px;">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">Daftar Foto</h1>
            <form action="">
                <div class="row">
                    <div class="col-lg-7 col-sm-6 mb-3">
                        <input class="form-control form-input" type="file" id="galleryPhoto">
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <button type="submit" class="btn btn-admin">Tambah Foto</button>
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
                            <!-- button trigger -->
                            <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#photoModal">Lihat</button></td>
                            <!-- modal -->
                            <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="photoModalLabel">desa_wisata.jpg</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <td class="btn-group">
                                <button type="button" class="btn btn-warning"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>2022-3-5 28:12:10</td>
                            <td>desa_wisata.jpg</td>
                            <td>
                                <div class="bg-success text-wrap">terpublikasi</div>
                            </td>
                            <!-- button trigger -->
                            <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#photoModal">Lihat</button></td>
                            <!-- modal -->
                            <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="photoModalLabel">desa_wisata.jpg</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <td class="btn-group">
                                <button type="button" class="btn btn-warning"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>2022-3-5 28:12:10</td>
                            <td>desa_wisata.jpg</td>
                            <td>
                                <div class="bg-danger text-wrap">dihapus</div>
                            </td>
                            <!-- button trigger -->
                            <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#photoModal">Lihat</button></td>
                            <!-- modal -->
                            <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="photoModalLabel">desa_wisata.jpg</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="https://www.summitbsa.org/wp-content/uploads/2019/10/placeholder.png" class="card-img" alt="gallery image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <td class="btn-group">
                                <button type="button" class="btn btn-warning"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>