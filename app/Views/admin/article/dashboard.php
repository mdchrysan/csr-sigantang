<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div id="layoutSidenav_content">
    <main class="container">
        <div class="row my-4">
            <h1 class="col-lg-6 col-sm-6">Daftar Artikel</h1>
            <!-- <div class="col-lg-6 col-sm-6 d-grid gap-2 d-md-flex justify-content-md-end"> -->
            <div class="col-lg-6 col-sm-6">
                <a href="create-article" class="btn btn-admin" id="btnTambah">Tambah Artikel</a>
            </div>
        </div>
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
                        <!-- button trigger -->
                        <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#articleModal">Lihat</button></td>
                        <!-- modal -->
                        <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="articleModalLabel">Judul Artikel</h1>
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
                        <td class="btn-group">
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
                            <div class="bg-success text-wrap">disetujui</div>
                        </td>
                        <!-- button trigger -->
                        <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#articleModal">Lihat</button></td>
                        <!-- modal -->
                        <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="articleModalLabel">Judul Artikel</h1>
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
                        <td class="btn-group">
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
                            <div class="bg-warning text-wrap">butuh diedit</div>
                        </td>
                        <!-- button trigger -->
                        <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#articleModal">Lihat</button></td>
                        <!-- modal -->
                        <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="articleModalLabel">Judul Artikel</h1>
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
                        <td class="btn-group">
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
                            <div class="bg-danger text-wrap">dihapus</div>
                        </td>
                        <!-- button trigger -->
                        <td><button type="button" class="btn btn-outline-admin" data-bs-toggle="modal" data-bs-target="#articleModal">Lihat</button></td>
                        <!-- modal -->
                        <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="articleModalLabel">Judul Artikel</h1>
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
                        <td class="btn-group">
                            <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
<?= $this->endSection(); ?>