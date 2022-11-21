<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="ps-4" style="margin-left:225px;">
    <div class="row">
        <div class="col-10">
            <h1 class="my-3">Daftar Kesan & Pesan Pengunjung</h1>
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
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kesan</th>
                            <th scope="col">Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($feedback as $f) : ?>
                            <tr>
                                <td scope="row"><?= $i++; ?></td>
                                <td><?= $f['created_at']; ?></td>
                                <td><?= $f['name']; ?></td>
                                <td><?= $f['address']; ?></td>
                                <td><?= $f['impression']; ?></td>
                                <td><?= $f['message']; ?></td>
                            </tr>
                        <?php endforeach ?>
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