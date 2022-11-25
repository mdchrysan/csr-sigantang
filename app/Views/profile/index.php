<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<header id="masthead-profil">

</header>
<section class="content" id="visi-misi">
    <div>
        <h1 class="content-heading">Visi & Misi</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Visi</h2>
            <p>Terciptanya Taman Wisata Sigantang sebagai destinasi pariwisata utama Indonesia yang bernuansa alam untuk kesejahteraan masyarakat, terutama masyarakat lokal.</p>
        </div>
        <div class="col-md-6">
            <h2>Misi</h2>
            <ol>
                <li>Meningkatkan pendapatan dan kesejahteraan masyarakat melalui sektor pariwisata</li>
                <li>Menjaga kelestarian sumber daya alam hayati</li>
                <li>Menumbuhkembangkan budaya kegotong-royongan di lingkungan masyarakat lokal</li>
            </ol>
        </div>
    </div>
</section>
<section class="content" id="surat-keputusan">
    <div class="text-center">
        <h1 class="content-heading">Surat Keputusan</h1>
    </div>
    <div class="sk-container">
        <!-- <embed src="\img\Scan-SK.pdf" type="application/pdf" width="450" height="600"> -->
        <img src="\img\SK-hal-1.jpg" alt="Foto SK" id="img-sk">
    </div>
</section>
<section class="content" id="struktur-organisasi">
    <div class="text-center">
        <h1 class="content-heading">Struktur Organisasi</h1>
    </div>
    <div class="text-center">
        <img src="\img\struktur-org-sgt.jpg" alt="Struktur Organisasi" id="img-struktur">
    </div>
</section>
<?= $this->endSection(); ?>