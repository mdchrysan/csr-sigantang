<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="ps-4" style="margin-left:225px;">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">Daftar Jumlah Pengunjung</h1>
            <form action="">
                <div class="row">
                    <div class="col-lg-4 col-sm-5 mb-3">
                        <input class="form-control form-input" type="number" id="visitorCounter">
                    </div>
                    <div class="col-lg-8 col-sm-7">
                        <!-- Add Visitor Trigger -->
                        <button type="button" class="btn btn-admin" data-bs-toggle="modal" data-bs-target="#addVisitorModal">Tambah Jumlah Pengunjung</button>
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
                            <th scope="col">Penambahan</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>2022-7-9 24:11:06</td>
                            <td>55</td>
                            <td>55</td>
                            <td>
                                <div class="bg-success text-wrap">terpublikasi</div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#uploadVisitorModal"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>2022-7-9 24:11:06</td>
                            <td>70</td>
                            <td>125</td>
                            <td>
                                <div class="bg-primary text-wrap">dalam proses</div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#uploadVisitorModal"><i class="fa-solid fa-arrow-up-from-bracket"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Add Visitor Modal -->
<div class="modal fade" id="addVisitorModal" tabindex="-1" aria-labelledby="addVisitorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center mt-3">
                <h3>Perhatian</h3>
                <p>Apakah Anda yakin ingin menambah jumlah pengunjung?</p>
            </div>
            <div class="modal-footer btn-group p-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-light">Ya</button>
            </div>
        </div>
    </div>
</div>
<!-- Upload Visitor Modal -->
<div class="modal fade" id="uploadVisitorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="uploadVisitorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center mt-3">
                <h3>Perhatian</h3>
                <p>Apakah Anda yakin ingin mengunggah jumlah pengunjung?</p>
            </div>
            <div class="modal-footer btn-group p-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-light">Ya</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>