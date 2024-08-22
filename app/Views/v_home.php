<?= $this->extend('template-home/template'); ?>

<?= $this->section('content-home'); ?>
<?php
function merubah_tanggal($tgl)
{
    $bulan = array(
        1 => 'januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tgl);
    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    function limit_wordss($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }
}

?>
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"></button>
        <button
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide-to="3"
            aria-label="label 4"></button>
    </div>
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <?php
        $no = 1;
        foreach ($head as $new): ?>
            <div class="carousel-item <?= $no++ == '1' ? 'active' : '' ?>">
                <div class="hero">
                    <img src="thumbnail/<?= $new->gambar ?>" alt="Gambar Latar" />
                    <div class="hero-overlay"></div>
                    <div class="container hero-content">
                        <div>
                            <p><?= $new->nama_kategori ?></p>
                            <h1 class="hero-title">
                                <a href="detail_berita/<?= $new->slug ?>"><?= $new->judul ?></a>
                            </h1>
                            <p class="hero-date"><?= $new->nama_pegawai ?> • <?= merubah_tanggal($new->tgl_upload) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#heroCarousel"
        style="z-index: 5"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#heroCarousel"
        style="z-index: 5"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container-fluid p-1" style="background-color: #f6f6f6">
    <div class="container mt-5">
        <div class="row">
            <div class="subjdl mb-2">
                <b>Intinya</b> Bulan ini <a href="">Lihat Semua</a>
            </div>
            <!-- Card 1 -->
            <?php foreach ($muncul2 as $section2): ?>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="card custom-card">
                        <a href="detail_berita/<?= $section2->slug ?>">
                            <img
                                src="thumbnail/<?= $section2->gambar ?>"
                                class="card-img-top"
                                alt="Article Image" />
                        </a>
                        <div class="card-body">
                            <span class="category-tag"><?= $section2->nama_kategori ?></span>
                            <h5 class="card-title">
                                <a href="detail_berita/<?= $section2->slug ?>"><?= $section2->judul ?></a>
                            </h5>
                            <p class="card-text"><?= $section2->nama_pegawai ?> • <?= merubah_tanggal($new->tgl_upload) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<div class="container-fluid p-1">
    <div class="container mt-5">
        <div class="row">
            <!-- Card 1 -->
            <!-- muncul nusantara dan politik -->
            <div class="subjdl mb-2">
                <b>
                    Lintas
                </b>Berita
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 mb-2 border-right-index">
                <?php foreach ($muncul3 as $row):
                ?>
                    <div class="card custom-card-index col-lg-12 col-md-12 col-sm-12 border-bottom">
                        <a href="detail_berita/<?= $row->slug ?>">
                            <img
                                src="thumbnail/<?= $row->gambar ?>"
                                class="card-img-top"
                                alt="Article Image" />
                        </a>
                        <div class="card-body">
                            <span class="category-tag"><?= $row->nama_kategori ?></span>
                            <h5 class="card-title">
                                <a href="detail_berita/<?= $row->slug ?>"><?= $row->judul ?></a>
                            </h5>
                            <p class="card-text"><?= $row->nama_pegawai ?> • <?= merubah_tanggal($row->tgl_upload) ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
                <?php foreach ($munculnusantara as $rows):
                ?>
                    <div class="card custom-card-index col-lg-12 col-md-12 col-sm-12">
                        <a href="detail_berita/<?= $rows->slug ?>">
                            <img
                                src="thumbnail/<?= $rows->gambar ?>"
                                class="card-img-top"
                                alt="Article Image" />
                        </a>
                        <div class="card-body">
                            <span class="category-tag"><?= $rows->nama_kategori ?></span>
                            <h5 class="card-title">
                                <a href="detail_berita/<?= $rows->slug ?>"><?= $rows->judul ?></a>
                            </h5>
                            <p class="card-text"><?= $rows->nama_pegawai ?> • <?= merubah_tanggal($rows->tgl_upload) ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-6 col-md-12 col-sm-12 mb-2 border-right-index">
                <?php foreach ($munculhulonthalo as $munhulonthalo): ?>
                    <div class="card custom-card-lg-index border-bottom">
                        <a href="detail_berita/<?= $munhulonthalo->slug ?>">
                            <img
                                src="thumbnail/<?= $munhulonthalo->gambar ?>"
                                class="card-img-top"
                                alt="Article Image" />
                        </a>
                        <div class="card-body">
                            <span class="category-tag"><?= $munhulonthalo->nama_kategori ?></span>
                            <h5 class="card-title">
                                <a href="detail_berita/<?= $munhulonthalo->slug ?>"><?= $munhulonthalo->judul ?></a>
                            </h5>
                            <p class="card-text"><?= $munhulonthalo->nama_pegawai ?> • <?= merubah_tanggal($munhulonthalo->tgl_upload) ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
                <?php if (isset($munculhulonthalo2[1])) {
                    $secondrow = $munculhulonthalo2[1];
                } ?>
                <div class="ren-card border-bottom py-3">
                    <div class="card-body">
                        <h5 class="category-tag"><?= $secondrow['nama_kategori'] ?></h5>
                        <h3 class="card-title mb-2">
                            <a href="detail_berita/<?= $secondrow['slug'] ?>"> <?= $secondrow['judul'] ?></a>
                        </h3>
                        <p class="card-text">
                            <small class="text-muted"><?= $secondrow['nama_pegawai'] ?> • <?= merubah_tanggal($secondrow['tgl_upload']) ?></small>
                        </p>
                    </div>
                    <a href="detail_berita/<?= $secondrow['slug'] ?>">
                        <img src="thumbnail/<?= $secondrow['gambar'] ?>" alt="Artwork Image" />
                    </a>
                </div>
                <?php foreach ($munculolahraga as $munolahraga): ?>
                    <div class="ren-card py-3">
                        <div class="card-body">
                            <h5 class="category-tag"><?= $munolahraga->nama_kategori ?></h5>
                            <h3 class="card-title mb-2">
                                <a href="detail_berita/<?= $munolahraga->slug ?>"> <?= $munolahraga->judul ?></a>
                            </h3>
                            <p class="card-text">
                                <small class="text-muted"><?= $munolahraga->nama_pegawai ?> • <?= merubah_tanggal($munolahraga->tgl_upload) ?></small>
                            </p>
                        </div>
                        <a href="detail_berita/<?= $munolahraga->slug ?>">
                            <img src="thumbnail/<?= $munolahraga->gambar ?>" alt="Artwork Image" />
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-3 col-md-12 col-sm-12 mb-2">
               
            </div>
        </div>
        <hr />
    </div>
</div>
<div class="container">
  
</div>
<div class="container-fluid p-1">
    <div class="container mt-5">
        <div class="row">
            <div class="subjdl mb-2">
                <b>Berita </b> Populer
            </div>
            <?php
            $no = 1;
            foreach ($munculberitapopuler as $populer): ?>
                <!-- Article 1 -->
                <div
                    class="col-lg-6 col-md-12 col-sm-12 topcard d-flex mb-4 border-bottom p-3">
                    <div class="number"><?= $no++ ?></div>
                    <div class="content ms-1">
                        <span class="category-tag"><?= $populer->nama_kategori ?></span>
                        <h2 class="card-title">
                            <a href="detail_berita/<?= $populer->slug ?>"><?= $populer->judul ?></a>
                        </h2>
                        <p class="card-text"><?= $populer->nama_pegawai ?> • <?= merubah_tanggal($populer->tgl_upload) ?></p>
                    </div>
                   <a href="detail_berita/<?= $populer->slug ?>">
                   <img
                        src="thumbnail/<?= $populer->gambar ?>"
                        alt="Article Image"
                        class="ms-auto" />
                    </a>
                   </a>
                </div>
            <?php endforeach ?>

            <!-- Tambahkan lebih banyak artikel sesuai kebutuhan -->
        </div>
    </div>
</div>
<div class="container-fluid p-1 mb-5">
    <div class="container mt-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="subjdl mb-2">
                <b>Inspirasi</b> dan Inovasi
            </div>
            <?php foreach ($munculkisahgorontalo as $kisahgorontalo): ?>
                <div class="col-lg-8 col-md-12 col-sm-12 border-right-index">
                    <div class="ren-card-large position-relative">
                        <img
                            style="cursor:pointer;"
                            onclick="window.location.href='detail_berita/<?= $kisahgorontalo->slug ?>'"
                            src="thumbnail/<?= $kisahgorontalo->gambar ?>"
                            alt="Music Festival Image" />
                        <div class="card-body">
                            <h5 class="category-tag"><?= $kisahgorontalo->nama_kategori ?></h5>
                            <h3 class="card-title mb-2">
                                <a style="color: #fff !important;" href="detail_berita/<?= $kisahgorontalo->slug ?>"> <?= $kisahgorontalo->judul ?></a>
                            </h3>
                            <p class="card-text text-white">
                                <small><?= $kisahgorontalo->nama_pegawai ?> • <?= merubah_tanggal($kisahgorontalo->tgl_upload) ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <?php foreach ($munculgayahidup as $gaya): ?>
                    <div class="ren-card-small border-bottom">
                        <div class="card-body">
                            <h5 class="category-tag"> <?= $gaya->nama_kategori ?></h5>
                            <h3 class="card-title mb-2">
                                <a href="detail_berita/<?= $gaya->slug ?>"> <?= $gaya->judul ?></a>
                            </h3>
                            <p class="card-text">
                                <small class="text-muted"> <?= $gaya->nama_pegawai ?> • <?= merubah_tanggal($gaya->tgl_upload) ?></small>
                            </p>
                        </div>
                        <a href="detail_berita/<?= $gaya->slug ?>">
                        <img
                            src="thumbnail/<?= $gaya->gambar ?>"
                            alt="Tech Conventions Image" />
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
            <!-- Card 3 -->
        </div>
        <hr />
    </div>
</div>

<?= $this->endSection(); ?>