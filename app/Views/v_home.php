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
<div class="container">
    <div class="row">
        <!-- Top News -->
        <div class="col-md-3 top-news">
            <h4 id="judul">
                <span class="box"></span>Hot now
            </h4>
            <ul>
                <?php
                $no = 1;
                foreach ($munculberitapopuler as $populer): ?>
                    <li> <a href="detail_berita/<?= $populer->slug ?>"><span class="time"><?= $populer->tgl_upload ?></span> <?= $populer->judul ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>

        <!-- Slider -->
        <div class="col-md-6 slider">
            <div class="head">
                <h6>Gorontalo, 8, November 2024</h6>
                <h4>Karena Setiap Berita Memiliki Inti.</h4>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $no = 1;
                    foreach ($head as $new): ?>
                        <div class="carousel-item <?= $no++ == '1' ? 'active' : '' ?>">
                            <div class="news-slider">
                                <img src="thumbnail/<?= $new->gambar ?>" alt="News Image">
                                <div class="news-caption">
                                    <div class="category"><?= $new->nama_kategori ?></div>
                                    <h5><?= $new->judul ?></h5>
                                    <div class="author-date">
                                        <?= $new->nama_pegawai ?> • <?= merubah_tanggal($new->tgl_upload) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- Editor Picks -->
        <div class="col-md-3 editor-picks">
            <h4 id="judul">
                <span class="box"></span>Latest news
            </h4>
            <?php foreach ($muncul2 as $section2): ?>
                <div class="editor-item">
                    <img src="thumbnail/<?= $section2->gambar ?>" alt="News">
                    <div>
                        <p><?= $section2->judul ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark mt-3 bb">
    <div class="container py-5">
        <div class="mb-4">
            <h4 id="judulD">
                <span class="box"></span>Recommended
            </h4>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card bg-dark text-white larger-card">
                    <img src="https://via.placeholder.com/870x495" class="card-img" alt="Article Image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3 overlay-dark">
                        <p class="text-warning mb-1">HUMAN INTEREST STORY</p>
                        <h5 class="card-title mb-1">Soekarno dan Protes Komunitas Arab di Gorontalo</h5>
                        <p class="card-author mb-0"><small>By Azwar Ramadhan Botutihe • 22 Agustus 2024</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-dark text-white ">
                    <img src="https://via.placeholder.com/435x247" class="card-img" alt="Article Image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3 overlay-dark">
                        <p class="text-warning mb-1">TRAVEL</p>
                        <h6 class="card-title mb-1">Solo Travel: Some Tips and Destinations for the...</h6>
                        <p class="card-author mb-0"><small>By Jane Smith • Jan 8, 2024</small></p>
                    </div>
                </div>
                <div class="card bg-dark text-white  mt-4">
                    <img src="https://via.placeholder.com/435x247" class="card-img" alt="Article Image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3 overlay-dark">
                        <p class="text-warning mb-1">TECH</p>
                        <h6 class="card-title mb-1">AI-Powered Financial Planning: How Algorithms...</h6>
                        <p class="card-author mb-0"><small>By Alex Brown • Jan 8, 2024</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-dark text-white ">
                    <img src="https://via.placeholder.com/435x247" class="card-img" alt="Article Image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3 overlay-dark">
                        <p class="text-warning mb-1">STARTUPS</p>
                        <h6 class="card-title mb-1">Tech Tools for your Time Management: Enhancing...</h6>
                        <p class="card-author mb-0"><small>By Emily Davis • Dec 8, 2023</small></p>
                    </div>
                </div>
                <div class="card bg-dark text-white  mt-4">
                    <img src="https://via.placeholder.com/435x247" class="card-img" alt="Article Image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end p-3 overlay-dark">
                        <p class="text-warning mb-1">AI POWERED</p>
                        <h6 class="card-title mb-1">A Guide to The Rise of Gourmet Street Food: Tren...</h6>
                        <p class="card-author mb-0"><small>By Michael Lee • Sep 8, 2023</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container py-1 mt-5">
    <div class="row g-4">
        <!-- Main article cards, menggunakan col-4 -->
        <?php foreach ($kat2 as $section3):

        ?>
            <div class="col-md-4 mb-4">
                <div class="col-md-12">
                    <div class="mb-2 bg-dark px-3 py-2 bb">
                        <h4 id="judulD">
                            <span class="box"></span><?= $section3->nama_kategori ?>
                        </h4>
                    </div>
                    <div class="card main-article-card h-100">
                        <img src="thumbnail/" class="card-img-top main-article-img" alt="Main article 1">
                        <div class="card-body d-flex flex-column">
                            <span class="text-warning small">TRAVEL</span>
                            <h5 class="card-title">Solo Travel: Some Tips and Destinations for the...</h5>
                            <p class="card-text">By Jane Smith • Jan 8, 2024</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="list-unstyled">
                        <li class="d-flex mb-3 small-article-item">
                            <img src="https://via.placeholder.com/100" class="img-fluid small-article-img me-3" alt="Related article 1">
                            <div>
                                <h6 class="small-article-title">Tech Tools for your Time Management: Enhancing Productivity</h6>
                                <small class="text-muted">By Jane Smith • Jan 8, 2024</small>
                            </div>
                        </li>
                        <li class="d-flex mb-3 small-article-item">
                            <img src="https://via.placeholder.com/100" class="img-fluid small-article-img me-3" alt="Related article 2">
                            <div>
                                <h6 class="small-article-title">A Guide to The Rise of Gourmet Street Food: Trends and Top Picks</h6>
                                <small class="text-muted">By Jane Smith • Jan 8, 2024</small>
                            </div>
                        </li>
                        <li class="d-flex mb-3 small-article-item">
                            <img src="https://via.placeholder.com/100" class="img-fluid small-article-img me-3" alt="Related article 3">
                            <div>
                                <h6 class="small-article-title">Gaming in the Age of AI: Strategies for Startups</h6>
                                <small class="text-muted">By Jane Smith • Jan 8, 2024</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>


<?= $this->endSection(); ?>