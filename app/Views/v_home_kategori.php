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
<div class="hero-cat">
    <?php
       $getKat= $kat[$id_kategori]->id_kategori;
    if ($getKat == '1') {
     $img = 'hulonthalo.jpg';
    }elseif ($getKat =='8') {
        $img = 'sport.jpg';
    }elseif ($getKat == '9') {
        $img = 'kisah.jpg';
    }elseif ($getKat == '10') {
        $img = 'ikn.jpg';
       
    }elseif ($getKat == '11') {
        $img = 'politik.jpg';
    }elseif ($getKat == '12') {
        $img = 'lifestyle.jpg'; 
    }
    ?>
    <img src="assets-home/img/hero/<?= $img ?>" alt="Gambar Latar" />
    <div class="hero-overlay-cat"></div>
    <div class="container hero-content-cat">
        <div>
            <h1 class="hero-title">
            <?= isset($kat[$id_kategori]->nama_kategori) ? $kat[$id_kategori]->nama_kategori : 'Tidak Ditemukan' ?>
            </h1>
            <p class="hero-subtitle">
               <?php 
             
               
                if ($getKat == '1') {
                    echo 'Menyajikan berita terkini dan mendalam seputar Gorontalo, mulai dari perkembangan di kota, provinsi, hingga kabupaten';
                }elseif ($getKat =='8') {
                    echo 'Menghadirkan berita terhangat dari dunia olahraga, mulai dari prestasi atlet lokal hingga perkembangan terbaru di kancah nasional dan internasional.';
                }elseif ($getKat == '9') {
                    echo 'Mengangkat cerita-cerita inspiratif dari masyarakat Gorontalo, memberikan sorotan pada kisah perjuangan, kesuksesan, dan nilai-nilai kehidupan yang memotivasi.';
                }elseif ($getKat == '10') {
                    echo 'Menyuguhkan berita nasional yang relevan dan penting, memberikan wawasan tentang isu-isu yang tengah berkembang di seluruh Indonesia.';
                }elseif ($getKat == '11') {
                    echo 'Memberikan liputan komprehensif tentang perkembangan politik, termasuk kebijakan, pemilu, dan dinamika politik di tingkat lokal dan nasional.';
                }elseif ($getKat == '12') {
                    echo 'Menyajikan berbagai artikel menarik tentang gaya hidup, teknologi, budaya, dan tren terkini yang mempengaruhi keseharian kita.';
                }
               ?>
            </p>
        </div>
    </div>
</div>
<div class="container mt-5">
    <!-- Main Content Row -->
    <div class="row justify-content-around">
        <!-- Main Article -->
        <div class="col-lg-9 of mb-5 p-4" id="stopPoint">
            <div class="row">
                <?php foreach ($showcategories as $item): ?>


                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card custom-card">
                            <a href="detail_berita/<?= $item->slug ?>">
                                <img
                                    src="thumbnail/<?= $item->gambar ?>"
                                    class="card-img-top"
                                    alt="Article Image" />
                            </a>
                            <div class="card-body">
                                <span class="category-tag"><?= $item->nama_kategori ?></span>
                                <h5 class="card-title">
                                    <a href="detail_berita/<?= $item->slug ?>"><?= $item->judul ?></a>
                                </h5>
                                <p class="card-text"><?= $item->nama_pegawai ?> • <?= merubah_tanggal($item->tgl_upload) ?></p>
                            </div>
                        </div>
                    </div>



                <?php endforeach; ?>

            </div>
        </div>
        <!-- Sidebar -->
        <div class="col-lg-3">
            <div class="top-news">
                <h5 class="subjdl">TOP NEWS</h5>
                <hr />
                <ul class="list-unstyled">
                    <?php $nomor = 1;
                    foreach ($topcategories as $item) : ?>
                        <li class="d-flex align-items-start mb-4">
                            <div class="d-flex align-items-center">
                                <img src="thumbnail/<?= $item->gambar ?>" class="img-fluid m-kecil " alt="...">
                                <span class="number-circle"><?= $nomor++ ?></span>
                                <div class="media-body">
                                    <a href="detail_berita/<?= $item->slug ?>" class="text-decoration-none text-dark">
                                        <h6 class="fw-bold mb-1"><?= $item->judul ?></h6>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <hr>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>