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
                        <!-- multiplier based on perPage paginate on controller -->
                        <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                        <?php foreach ($feedback as $f) : ?>
                            <tr>
                                <td scope="row"><?= $i++; ?></td>
                                <td><?= date('d-M-y H:i:s', strtotime($f['created_at'])); ?></td>
                                <td><?= $f['name']; ?></td>
                                <td><?= $f['address']; ?></td>
                                <td><?= $f['impression']; ?></td>
                                <td><?= $f['message']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <?= $pager->links('feedback', 'admin_pagination') ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>