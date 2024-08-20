<?= $this->extend('template-home/template'); ?>

<?= $this->section('content-home'); ?>
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
        <div class="carousel-item active">
            <div class="hero">
                <img src="assets-home/img/berita/berita1.jpg" alt="Gambar Latar" />
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div>
                        <p>Olahraga</p>
                        <h1 class="hero-title">
                            <a href="detail_berita.html">Indonesia Raih 2 Emas Olimpiade Setelah 32 Tahun, Netizen
                                Nangis</a>
                        </h1>
                        <p class="hero-subtitle">
                            Atlet angkat besi Rizki Juniansyah berhasil menorehkan
                            prestasi gemilang di Olimpiade Paris 2024.
                        </p>
                        <p class="hero-date">oleh Joanna Wellick • 29 Maret 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="hero">
                <img src="assets-home/img/berita/juve.jpeg" alt="Gambar Latar" />
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div>
                        <p>Olahraga</p>
                        <h1 class="hero-title">
                            <a href="detail_berita.html">Biar Bisa Nonton Inggris di Final Euro 2024, Sekolah di
                                Essex Bolehkan Siswanya Terlambat</a>
                        </h1>
                        <p class="hero-subtitle">
                            Demi menonton Inggris di final Euro 2024, sekolahan di Essex
                            bikin kebijakan baru.
                        </p>
                        <p class="hero-date">oleh John Doe • 15 April 2023</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="hero">
                <img src="assets-home/img/a.jpeg" alt="Gambar Latar" />
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div>
                        <p>Hulonthalo</p>
                        <h1 class="hero-title">
                            <a href="detail_berita.html">8 Nama Titik Bor di Tambang Emas Ilegal Suwawa Gorontalo</a>
                        </h1>
                        <p class="hero-subtitle">
                            Ada 8 titik bor aktif di tambang emasilegal Suwawa, Gorontalo.
                            Beroperasi sejak tahun 90-an.
                        </p>
                        <p class="hero-date">oleh Jane Smith • 10 Mei 2023</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="hero">
                <img src="assets-home/img/berita/itali.jpeg" alt="Gambar Latar" />
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div>
                        <p>Olahraga</p>
                        <h1 class="hero-title">
                            <a href="detail_berita.html">Rekap Perjalanan Italia di Euro 2024: Tertatih di Fase
                                Grup, Remuk di Fase Knockout</a>
                        </h1>
                        <p class="hero-subtitle">
                            Italia menjadi tim pertama yang tersingkir di babak 16 besar
                            Euro 2024..
                        </p>
                        <p class="hero-date">oleh Jane Smith • 10 Mei 2023</p>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="col-12 mb-5">
            <div class="adv_article-left" style="background-color: #fff">
                ADVERTISEMENT
            </div>
        </div>
        <div class="row">
            <div class="subjdl mb-2">
                <b>Intinya</b> Bulan ini <a href="">Liha Semua</a>
            </div>
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card custom-card">
                    <img
                        src="assets-home/img/berita/berita1.jpg"
                        class="card-img-top"
                        alt="Article Image" />
                    <div class="card-body">
                        <span class="category-tag">Olahraga</span>
                        <h5 class="card-title">
                            Indonesia Raih 2 Emas Olimpiade Setelah 32 Tahun, Netizen
                            Nangis
                        </h5>
                        <p class="card-text">by Elliot Alderson • February 5, 2023</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card custom-card">
                    <img
                        src="assets-home/img/berita/itali.jpeg"
                        class="card-img-top"
                        alt="Article Image" />
                    <div class="card-body">
                        <span class="category-tag">Olahraga</span>
                        <h5 class="card-title">Rekap Perjalanan Italia di Euro 2024: Tertatih di Fase
                            Grup, Remuk di Fase Knockout</h5>
                        <p class="card-text">by Joanna Wellick • June 7, 2023</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card custom-card">
                    <img
                        src="assets-home/img/berita/juve.jpeg"
                        class="card-img-top"
                        alt="Article Image" />
                    <div class="card-body">
                        <span class="category-tag">Olahraga</span>
                        <h5 class="card-title">
                            Biar Bisa Nonton Inggris di Final Euro 2024, Sekolah di
                            Essex Bolehkan Siswanya Terlambat
                        </h5>
                        <p class="card-text">by Elliot Alderson • March 19, 2023</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="card custom-card">
                    <img
                        src="assets-home/img/a.jpeg"
                        class="card-img-top"
                        alt="Article Image" />
                    <div class="card-body">
                        <span class="category-tag">Hulonthalo</span>
                        <h5 class="card-title">
                            8 Nama Titik Bor di Tambang Emas Ilegal Suwawa Gorontalo
                        </h5>
                        <p class="card-text">by Elliot Alderson • March 9, 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-1">
    <div class="container mt-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="subjdl mb-2">
                <b>Hulonthalo</b> <a href="">Liha Semua</a>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 mb-2 border-right-index">
                <div class="card custom-card-index col-lg-12 col-md-12 col-sm-12">
                    <img
                        src="assets-home/img/berita/66b0df4a1c552.jpg"
                        class="card-img-top"
                        alt="Article Image" />
                    <div class="card-body">
                        <span class="category-tag">HULONTHALO</span>
                        <h5 class="card-title">
                            Behind the Scenes: A Day in a Star's Life
                        </h5>
                        <p class="card-text">by Elliot Alderson • February 5, 2023</p>
                    </div>
                </div>
                <div class="card custom-card-index col-lg-12 col-md-12 col-sm-12">
                    <img
                        src="assets-home/img/berita/6551ad4118fd5.jpg"
                        class="card-img-top"
                        alt="Article Image" />
                    <div class="card-body">
                        <span class="category-tag">HULONTHALO</span>
                        <h5 class="card-title">
                            Behind the Scenes: A Day in a Star's Life
                        </h5>
                        <p class="card-text">by Elliot Alderson • February 5, 2023</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-6 col-md-12 col-sm-12 mb-2 border-right-index">
                <div class="card custom-card-lg-index">
                    <img
                        src="assets-home/img/berita/66b7088ee1763.jpg"
                        class="card-img-top"
                        alt="Article Image" />
                    <div class="card-body">
                        <span class="category-tag">HULONTHALO</span>
                        <h5 class="card-title">Behind the Lens: A Journey into</h5>
                        <p class="card-text">by Joanna Wellick • June 7, 2023</p>
                    </div>
                </div>
                <div class="ren-card">
                    <div class="card-body">
                        <h5 class="category-tag">HULONTHALO</h5>
                        <h3 class="card-title mb-2">
                            Exploring the Renaissance: Masters and Masterpieces
                        </h3>
                        <p class="card-text">
                            <small class="text-muted">by Elliot Alderson | April 25, 2023</small>
                        </p>
                    </div>
                    <img src="assets-home/img/berita/66be2e59e4ebe.jpg" alt="Artwork Image" />
                </div>
                <div class="ren-card">
                    <div class="card-body">
                        <h5 class="category-tag">HULONTHALO</h5>
                        <h3 class="card-title mb-2">
                            Exploring the Renaissance: Masters and Masterpieces
                        </h3>
                        <p class="card-text">
                            <small class="text-muted">by Elliot Alderson | April 25, 2023</small>
                        </p>
                    </div>
                    <img src="assets-home/img/a.jpeg" alt="Artwork Image" />
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-3 col-md-12 col-sm-12 mb-2">
                <div class="adv_article-right">ADVERTISEMENT</div>
            </div>
        </div>
        <hr />
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="adv_article-left">ADVERTISEMENT</div>
        </div>
    </div>
</div>
<div class="container-fluid p-1">
    <div class="container mt-5">
        <div class="row">
            <div class="subjdl mb-2">
                <b>Olahraga</b> <a href="">Liha Semua</a>
            </div>
            <!-- Article 1 -->
            <div
                class="col-lg-6 col-md-12 col-sm-12 topcard d-flex mb-4 border-bottom p-3">
                <div class="number">1</div>
                <div class="content ms-1">
                    <span class="category-tag">FASHION</span>
                    <h2 class="card-title">
                        Unforgettable Moments from This Year’s Oscars
                    </h2>
                    <p class="card-text">by Joanna Wellick • June 7, 2023</p>
                </div>
                <img
                    src="assets-home/img/berita/berita1.jpg"
                    alt="Article Image"
                    class="ms-auto" />
            </div>
            <!-- Article 2 -->
            <div
                class="col-lg-6 col-md-12 col-sm-12 topcard d-flex mb-4 border-bottom p-3">
                <div class="number">2</div>
                <div class="content ms-1">
                    <span class="category-tag">FASHION</span>
                    <h2 class="card-title">
                        Unforgettable Moments from This Year’s Oscars
                    </h2>
                    <p class="card-text">by Joanna Wellick • June 7, 2023</p>
                </div>
                <img
                    src="assets-home/img/berita/juve.jpeg"
                    alt="Article Image"
                    class="ms-auto" />
            </div>
            <div
                class="col-lg-6 col-md-12 col-sm-12 topcard d-flex mb-4 border-bottom p-3">
                <div class="number">3</div>
                <div class="content ms-1">
                    <span class="category-tag">FASHION</span>
                    <h2 class="card-title">
                        Unforgettable Moments from This Year’s Oscars
                    </h2>
                    <p class="card-text">by Joanna Wellick • June 7, 2023</p>
                </div>
                <img
                    src="assets-home/img/berita/itali.jpeg"
                    alt="Article Image"
                    class="ms-auto" />
            </div>
            <!-- Article 2 -->
            <div
                class="col-lg-6 col-md-12 col-sm-12 topcard d-flex mb-4 border-bottom p-3">
                <div class="number">4</div>
                <div class="content ms-1">
                    <span class="category-tag">FASHION</span>
                    <h2 class="card-title">
                        Unforgettable Moments from This Year’s Oscars
                    </h2>
                    <p class="card-text">by Joanna Wellick • June 7, 2023</p>
                </div>
                <img
                    src="assets-home/img/berita/rans.jpeg"
                    alt="Article Image"
                    class="ms-auto" />
            </div>
            <div
                class="col-lg-6 col-md-12 col-sm-12 topcard d-flex mb-4 border-bottom p-3">
                <div class="number">5</div>
                <div class="content ms-1">
                    <span class="category-tag">FASHION</span>
                    <h2 class="card-title">
                        Unforgettable Moments from This Year’s Oscars
                    </h2>
                    <p class="card-text">by Joanna Wellick • June 7, 2023</p>
                </div>
                <img
                    src="assets-home/img/berita/gp.jpg"
                    alt="Article Image"
                    class="ms-auto" />
            </div>
            <!-- Article 2 -->
            <div
                class="col-lg-6 col-md-12 col-sm-12 topcard d-flex mb-4 border-bottom p-3">
                <div class="number">6</div>
                <div class="content ms-1">
                    <span class="category-tag">FASHION</span>
                    <h2 class="card-title">
                        Unforgettable Moments from This Year’s Oscarsasdsadasd
                    </h2>
                    <p class="card-text">by Joanna Wellick • June 7, 2023</p>
                </div>
                <img
                    src="assets-home/img/berita//kanguru.jpg"
                    alt="Article Image"
                    class="ms-auto" />
            </div>

            <!-- Tambahkan lebih banyak artikel sesuai kebutuhan -->
        </div>
    </div>
</div>
<div class="container-fluid p-1">
    <div class="container mt-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="subjdl mb-2">
                <b>Human Interest Story</b> <a href="">Liha Semua</a>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 border-right-index">
                <div class="ren-card-large position-relative">
                    <img
                        src="assets-home/img/berita/berita1.jpg"
                        alt="Music Festival Image" />
                    <div class="card-body">
                        <h5 class="category-tag">Events</h5>
                        <h3 class="card-title mb-2">
                            Summer’s Hottest Music Festivals You Can’t Miss
                        </h3>
                        <p class="card-text text-white">
                            <small>by Joanna Wellick | March 24, 2023</small>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="ren-card-small">
                    <div class="card-body">
                        <h5 class="category-tag">Events</h5>
                        <h3 class="card-title mb-2">
                            Tech Conventions: Innovations and Future Trends
                        </h3>
                        <p class="card-text">
                            <small class="text-muted">by Elliot Alderson | April 3, 2023</small>
                        </p>
                    </div>
                    <img
                        src="assets-home/img/berita/berita1.jpg"
                        alt="Tech Conventions Image" />
                </div>

                <div class="ren-card-small">
                    <div class="card-body">
                        <h5 class="category-tag">Events</h5>
                        <h3 class="card-title mb-2">
                            Global Celebrations: A Journey Through Cultural Festivals
                        </h3>
                        <p class="card-text">
                            <small class="text-muted">by Joanna Wellick | March 29, 2023</small>
                        </p>
                    </div>
                    <img
                        src="assets-home/img/berita/berita1.jpg"
                        alt="Global Celebrations Image" />
                </div>

                <div class="ren-card-small">
                    <div class="card-body">
                        <h5 class="category-tag">Events</h5>
                        <h3 class="card-title mb-2">
                            Inside the Excitement of the Super Bowl Weekend
                        </h3>
                        <p class="card-text">
                            <small class="text-muted">by Elliot Alderson | March 19, 2023</small>
                        </p>
                    </div>
                    <img src="assets-home/img/berita/berita1.jpg" alt="Super Bowl Image" />
                </div>
            </div>
            <!-- Card 3 -->
        </div>
        <hr />
    </div>
</div>

<?= $this->endSection(); ?>