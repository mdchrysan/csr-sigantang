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
<section class="content" id="fasilitas">
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
    <h1 class="content-heading">1234+ Pengunjung</h1>
    <p>Terima kasih telah berkunjung dan turut mensejahterakan masyarakat lokal!</p>
</section>
<section class="content" id="video">
    <h1 class="content-heading">Video ...?</h1>
    <div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/yypDW9wxtxo?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
<section class="content" id="lokasi">
    <h1 class="content-heading">Lokasi</h1>
    <div class="row">
        <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15857.919093178038!2d106.9163047!3d-6.4607366!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x292a150fad7dc937!2sTaman%20Wisata%20Sigantang!5e0!3m2!1sen!2sid!4v1665562008065!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col">
            <h2>1.5 km dari Stasiun Nambo!</h2>
            <h3>KP Lebak Desa Nambo<br>Kecamatan Klapanunggal<br>Kabupaten Bogor<br>Jawa Barat<br>16710</h3>
            <h3>Narahubung:<br>Bapak Abece<br>0812-3456-7890</h3>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>