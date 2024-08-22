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
    <div class="row justify-content-around">
        <div class="article-header mb-4">
            <h1 class="title-news">
                <?= isset($lab[$id_label]->nama_label) ? $lab[$id_label]->nama_label : 'Tidak Ditemukan' ?>
            </h1>
        </div>
        <!-- Main Article -->
        <!-- Main Article -->
        <div class="col-lg-9 p-3 of mb-5" id="stopPoint">
            <div class="row">
                <?php foreach ($labelpangge as $dlabel): ?>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card custom-card">
                            <a href="detail_berita/<?= $dlabel->slug ?>"><img
                                    src="thumbnail/<?= $dlabel->gambar ?>"
                                    class="card-img-top"
                                    alt="Article Image" /></a>
                            <div class="card-body">
                                <span class="category-tag"><?= $dlabel->nama_kategori ?></span>
                                <h5 class="card-title">
                                    <a href="detail_berita/<?= $dlabel->slug ?>" style="color:black;">
                                        <?= $dlabel->judul ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?= $dlabel->nama_pegawai ?> • <?= merubah_tanggal($dlabel->tgl_upload) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
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
                                    <a href="detail_berita/<?= $munculberitatop->slug ?>" class="text-decoration-none text-dark">
                                        <h6 class="fw-bold mb-1"><?= $munculberitatop->judul ?></h6>
                                    </a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                    <hr>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>