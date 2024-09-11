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
                <small class="text-muted caption"><i><?= $detailB['caption'] ?></i></small>
            </div>
            <div class="article-content mt-4">
                <?= $detailB['isi'] ?>
                <div class="label_article">
                    <ul>
                        <?php foreach ($detailB['labels'] as $detaillabel): ?>
                            <a href="labels/<?= $detaillabel['id_label'] ?>">
                                <li> <?= $detaillabel['nama_label'] ?></li>
                            </a>
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
           
            <h5 class="subjdl mt-5">Read More</h5>
            <div class="row">
                <?php foreach ($terbaru as $baruberita): ?>
                    <div class="col-md-4 d-inline">
                       
                            <div class="card article-card">
                                <a href="detail_berita/<?= $baruberita->slug ?>">
                                <img src="thumbnail/<?= $baruberita->gambar ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <small class="text-uppercase text-kuning"><?= $baruberita->nama_kategori ?></small>
                                    <h5 class="card-title"><a href="detail_berita/<?= $baruberita->slug ?>"><?= $baruberita->judul ?></a></h5>
                                    <p class="card-text"><small class="text-muted"><?= $baruberita->nama_pegawai ?> - <?= merubah_tanggal($baruberita->tgl_upload) ?></small></p>
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
                        <hr>
                    <?php endforeach ?>
                </ul>
            </div>
      
            <h5 class="subjdl mt-5">Latest on this categories</h5>
            <div class="row mb-3">
                <?php foreach ($latestBerita as $item): ?>
                    <div class="col-12">
                        <div class="card bg-dark text-white">
                            <img src="thumbnail/<?= $item->gambar ?>" class="card-img" alt="Award Show" >
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <small class="text-uppercase"><?= $item->nama_kategori ?></small>
                                <h5 class="card-title"><a style="color:#fff" href="detail_berita/<?= $item->slug ?>"><?= $item->judul ?></a></h5>
                                <p class="card-text"><?= $item->nama_pegawai ?> &nbsp;&bull;&nbsp; <?= merubah_tanggal($item->tgl_upload) ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                endforeach; ?>
            </div>
          
        </div>
    </div>
</div>
<?= $this->endSection(); ?>