<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Daftar Artikel</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabel Artikel
                </div>
                <div class="card-body">
                    <table class="table" id="datatablesSimple">
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
                                <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>2022-1-1 25:10:10</td>
                                <td>Desa Wisata</td>
                                <td>Budi</td>
                                <td>
                                    <div class="bg-success text-wrap">disetujui</div>
                                </td>
                                <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>2022-1-1 25:10:10</td>
                                <td>Desa Wisata</td>
                                <td>Budi</td>
                                <td>
                                    <div class="bg-warning text-wrap">butuh diedit</div>
                                </td>
                                <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>2022-1-1 25:10:10</td>
                                <td>Desa Wisata</td>
                                <td>Budi</td>
                                <td>
                                    <div class="bg-danger text-wrap">dihapus</div>
                                </td>
                                <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">4</td>
                                <td>2022-1-1 25:10:10</td>
                                <td>Desa Wisata</td>
                                <td>Budi</td>
                                <td>
                                    <div class="bg-primary text-wrap">dalam proses</div>
                                </td>
                                <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">5</td>
                                <td>2022-1-1 25:10:10</td>
                                <td>Desa Wisata</td>
                                <td>Budi</td>
                                <td>
                                    <div class="bg-primary text-wrap">dalam proses</div>
                                </td>
                                <td><button type="button" class="btn btn-outline-primary">Lihat</button></td>
                                <td>
                                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
<?= $this->endSection(); ?>