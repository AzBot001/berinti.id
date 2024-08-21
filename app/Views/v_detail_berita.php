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
<div class="container mt-5">
    <!-- Main Content Row -->
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="article-header">
                <h6 id="categories"><?= $detailB['nama_kategori'] ?> </h6>
                <h1 class="title-news">
                    <?= $detailB['judul'] ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-around">
        <!-- Main Article -->
        <div class="col-lg-8 of mb-5" id="stopPoint">
            <hr />
            <p class="author-date">
                <img
                    src="foto/<?= $detailB['foto'] ?>"
                    class="author-img rounded-circle"
                    alt="" />
                <?= $detailB['nama_pegawai'] ?>, <?= merubah_tanggal($detailB['tgl_upload']) ?>
            </p>
            <div class="article-image">
                <img
                    src="thumbnail/<?= $detailB['gambar'] ?>"
                    alt="Main Article Image"
                    class="img-fluid" />
                <small class="text-muted caption"><i><?= $detailB['caption'] ?>
                        (<?= $detailB['nama_pegawai'] ?> • <?= merubah_tanggal($detailB['tgl_upload']) ?>)</i></small>
            </div>
            <div class="article-content mt-4">
                <?= $detailB['isi'] ?>
                <div class="label_article">
                    <ul>
                        <?php foreach ($detailB['labels'] as $detaillabel): ?>
                            <li> <?= $detaillabel['nama_label'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <hr>
                <p class="author-date mb-5">
                    <img
                        src="assets-home/img/user.png"
                        class="author-img rounded-circle"
                        alt="" />
                    <?= $detailB['nama_pegawai'] ?>, <?= merubah_tanggal($detailB['tgl_upload']) ?>

                </p>
            </div>
            <div class="adv_article-left">ADVERTISEMENT</div>
            <h5 class="subjdl mt-5">Read More</h5>
            <div class="row">
                <div class="col-md-4">
                    <div class="card article-card">
                        <img src="assets-home/img/berita/berita1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <small class="text-uppercase text-kuning">Celebrities</small>
                            <h5 class="card-title">The World's Most Spectacular New Year's Eve Celebrations</h5>
                            <p class="card-text"><small class="text-muted">by Joanna Wellick - March 4, 2023</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card article-card">
                        <img src="assets-home/img/berita/berita1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <small class="text-uppercase text-kuning">Celebrities</small>
                            <h5 class="card-title">Runway Revelations: What's New in the Fashion Week Shows</h5>
                            <p class="card-text"><small class="text-muted">by Elliot Alderson - April 23, 2023</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card article-card">
                        <img src="assets-home/img/berita/berita1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <small class="text-uppercase text-kuning">Celebrities</small>
                            <h5 class="card-title">Exploring the Renaissance: Masters and Masterpieces</h5>
                            <p class="card-text"><small class="text-muted">by Elliot Alderson - April 25, 2023</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card article-card">
                        <img src="assets-home/img/berita/demo-image-0039-1044x587.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <small class="text-uppercase text-kuning">Celebrities</small>
                            <h5 class="card-title">Inside the Glamorous Lives of Hollywood A-Listers</h5>
                            <p class="card-text"><small class="text-muted">by Elliot Alderson - January 5, 2023</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card article-card">
                        <img src="assets-home/img/berita/berita1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <small class="text-uppercase text-kuning">Celebrities</small>
                            <h5 class="card-title">Secrets Behind Celeb Red Carpet Looks Revealed</h5>
                            <p class="card-text"><small class="text-muted">by Elliot Alderson - January 8, 2023</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card article-card">
                        <img src="assets-home/img/berita/berita1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <small class="text-uppercase text-kuning">Celebrities</small>
                            <h5 class="card-title">Rising Stars: Who's Next in the Spotlight?</h5>
                            <p class="card-text"><small class="text-muted">by Joanna Wellick - January 13, 2023</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adv_article-left">ADVERTISEMENT</div>
        </div>
        <!-- Sidebar -->
        <div class="col-lg-3">
            <div class="top-news">
                <h5 class="subjdl">TOP NEWS</h5>
                <hr />
                <ul class="list-unstyled">
                    <?php
                    $no = 1;
                    foreach ($munculberitatop as $munculberitatop): ?>
                        <li class="d-flex align-items-start mb-4">
                            <div class="d-flex align-items-center">
                                <img src="thumbnail/<?= $munculberitatop->gambar ?>" class="img-fluid m-kecil " alt="...">
                                <span class="number-circle"><?= $no++ ?></span>
                                <div class="media-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h6 class="fw-bold mb-1"><?= $munculberitatop->judul ?></h6>
                                    </a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                    <hr>
                </ul>
            </div>
            <div class="adv_article-right">ADVERTISEMENT</div>
            <h5 class="subjdl mt-5">Latest on this categories</h5>
            <div class="row ">
                <?php foreach ($muncullastetkategori as $muncullastetkat): ?>
                    <div class="col-12 mb-3">
                        <div class="card bg-dark text-white">
                            <img src="assets-home/img/berita/demo-image-0039-1044x587.jpg" class="card-img" alt="Award Show">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <small class="text-uppercase"><?= $muncullastetkat->nama_kategori ?></small>
                                <h5 class="card-title">Award Show Highlights: Fashion, Speeches, Moments</h5>
                                <p class="card-text">by Elliot Alderson &nbsp;&bull;&nbsp; February 6, 2023</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="adv_article-right" id="sticky">ADVERTISEMENT</div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>