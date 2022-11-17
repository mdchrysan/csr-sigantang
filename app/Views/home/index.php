<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<header class="masthead" id="masthead-beranda">
    <div class="masthead-heading">Sigantang</div>
    <div class="masthead-subheading">Desa Wisata Bernuansa Alam dengan Kearifan Lokal</div>
    <a class="btn btn-primary btn-xl" href="#tentang">Jelajahi</a>
</header>
<section class="content" id="tentang">
    <div class="row">
        <div class="col-md-6">
            <img src="\img\backdrop-about.jpg" alt="Foto Backdrop">
        </div>
        <div class="col-md-6">
            <div class="mx-3">
                <h1 class="content-heading">Tentang<br>Desa Sigantang</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, molestias? Ducimus magnam tempore quam, suscipit consequatur eveniet aliquam sequi nisi, quisquam tempora animi adipisci cumque labore qui atque temporibus odit.</p>
            </div>
        </div>
    </div>
</section>
<section class="content" id="fasilitas" style="background-color: #defaa7;">
    <div class="container">
        <div class="text-center">
            <h1 class="content-heading">Fasilitas</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="f-item">
                    <div class="f-logo f-odd">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <div class="f-caption">
                        <div class="f-caption-heading">Spot Foto</div>
                        <div class="f-caption-subheading">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="f-item">
                    <div class="f-logo f-even">
                        <i class="fas fa-swimmer"></i>
                    </div>
                    <div class="f-caption">
                        <div class="f-caption-heading">Kolam Renang</div>
                        <div class="f-caption-subheading">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="f-item">
                    <div class="f-logo f-odd">
                        <i class="fas fa-music"></i>
                    </div>
                    <div class="f-caption">
                        <div class="f-caption-heading">Karaoke</div>
                        <div class="f-caption-subheading">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="f-item">
                    <div class="f-logo f-even">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="f-caption">
                        <div class="f-caption-heading">Gazebo</div>
                        <div class="f-caption-subheading">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="f-item">
                    <div class="f-logo f-odd">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="f-caption">
                        <div class="f-caption-heading">Warung UMKM</div>
                        <div class="f-caption-subheading">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="f-item">
                    <div class="f-logo f-even">
                        <i class="fas fa-parking"></i>
                    </div>
                    <div class="f-caption">
                        <div class="f-caption-heading">Areal Parkir</div>
                        <div class="f-caption-subheading">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="f-item">
                    <div class="f-logo f-odd">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <div class="f-caption">
                        <div class="f-caption-heading">Mushola</div>
                        <div class="f-caption-subheading">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content" id="jumlahPengunjung">
    <div class="container">
        <div class="text-center">
            <h1 class="v-heading">
                <span>1234+</span>
                <span>Pengunjung</span>
            </h1>
            <p class="v-subheading">Terima kasih telah berkunjung dan turut mensejahterakan masyarakat lokal!</p>
        </div>
    </div>
</section>
<section class="content" id="video">
    <div class="row justify-content-center">
        <div class="text-center">
            <h1 class="content-heading">Video</h1>
        </div>
        <div class="col-lg-8">
            <div class="v-container">
                <div class="container-iframe">
                    <iframe class="responsive-iframe" src="https://www.youtube.com/embed/yypDW9wxtxo?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content" id="lokasi">
    <div class="container">
        <div class="text-center">
            <h1 class="content-heading">Lokasi</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="l-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15857.919093178038!2d106.9163047!3d-6.4607366!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x292a150fad7dc937!2sTaman%20Wisata%20Sigantang!5e0!3m2!1sen!2sid!4v1665562008065!5m2!1sen!2sid" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="l-caption">
                    <h2>1.5 km dari Stasiun Nambo!</h2>
                    <h3>KP Lebak Desa Nambo<br>Kecamatan Klapanunggal<br>Kabupaten Bogor<br>Jawa Barat<br>16710</h3>
                    <hr>
                    <h4>Narahubung:<br>Bapak Abece<br>0812-3456-7890</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content" id="kesanpesan">
    <div class="container">
        <div class="text-center">
            <h1 class="content-heading">Kesan & Pesan</h1>
        </div>
    </div>
    <form action="/submit-feedback" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="feedback-name" class="form-label">Nama</label>
            <input type="text" class="form-control form-input <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="feedback-name" name="name" value="<?= old('name'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('name'); ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="feedback-address" class="form-label">Asal Daerah</label>
            <input type="text" class="form-control form-input <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>" id="feedback-address" name="address" value="<?= old('address'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('address'); ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="feedback-impression" class="form-label">Kesan</label>
            <textarea type="text" class="form-control form-input <?= ($validation->hasError('impression')) ? 'is-invalid' : ''; ?>" id="feedback-impression" rows="4" name="impression"><?= old('impression'); ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('impression'); ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="feedback-message" class="form-label">Pesan</label>
            <textarea type="text" class="form-control form-input <?= ($validation->hasError('message')) ? 'is-invalid' : ''; ?>" id="feedback-message" rows="4" name="message"><?= old('message'); ?></textarea>
            <div class="invalid-feedback">
                <?= $validation->getError('message'); ?>
            </div>
        </div>
        <div class="text-center">
            <p class="fst-italic">*Informasi yang Anda kirimkan tidak akan dipublikasikan dan hanya dipakai oleh admin website Sigantang untuk pengembangan desa wisata.</p>
            <button type="submit" class="btn btn-success">Kirim</button>
            <?php if (session()->getFlashdata('msg-feedback')) : ?>
                <div style="color: red; font-size: .875em; margin-top: .25rem;">
                    <?= session()->getFlashdata('msg-feedback'); ?>
                </div>
            <?php endif; ?>
        </div>
    </form>
</section>
<?= $this->endSection(); ?>