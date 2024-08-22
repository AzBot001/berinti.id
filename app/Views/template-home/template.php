<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <base href="<?= base_url('assets-home'); ?>">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="assets-home/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="assets-home/img/logo.png" width="130" alt="" /></a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav ms-auto">
                    <?php
                    // memanggil kategori
                    foreach ($kat as $kateg):
                    ?>
                        <li class="nav-item"><a href="categories/<?= $kateg->id_kategori ?>" class="nav-link"><?= $kateg->nama_kategori ?></a></a></li>
                        <li class="nav-item dropdown">
                            <?php if ($kateg->nama_kategori != 'Nusantara'): ?>
                                <a
                                    class="nav-link dropdown-toggle span"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                </a>
                            <?php endif ?>
                            <ul
                                class="dropdown-menu"
                                aria-labelledby="navbarDropdownMenuLink">
                                <?php
                                foreach ($kateg->subkategori as $sub):
                                    if ($kateg->nama_kategori != 'Nusantara'):
                                ?>
                                        <li>
                                            <a class="dropdown-item" href="sub_categories/<?= $sub->id_subkategori ?>"><?= $sub->nama_subkategori ?></a>
                                        </li>
                                <?php endif;
                                endforeach ?>
                            </ul>
                        </li>
                       
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- this konten -->
    <?= $this->renderSection('content-home'); ?>

    <footer class="bg-light py-5">
        <div class="container">
            <!-- Logo Section -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="footer-logo">
                        <img src="assets-home/img/logo.png" width="200" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-md-2">
                    <h5>Hulonthalo</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Provinsi Gorontalo</a></li>
                        <li><a href="#">Kota Gorontalo</a></li>
                        <li><a href="#">Kabupaten Bone Bolango</a></li>
                        <li><a href="#">Kabupaten Gorontalo</a></li>
                        <li><a href="#">Kabupaten Boalemo</a></li>
                        <li><a href="#">Kabupaten Pohuwato</a></li>
                        <li><a href="#">Kabupaten Gorontalo Utara</a></li>
                    </ul>
                </div>
                <!-- Kolom 2 -->
                <div class="col-md-1">
                    <h5>Olahraga</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">E-Sport</a></li>
                        <li><a href="#">Sepak Bola</a></li>
                        <li><a href="#">Takraw</a></li>
                        <li><a href="#">Silat</a></li>
                    </ul>
                </div>
                <!-- Kolom 3 -->
                <div class="col-md-1">
                    <h5>Human Interest Story</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Kisah Pedagang</a></li>
                        <li><a href="#">Kisah Inspiratif</a></li>
                        <li><a href="#">Kisah Sukses</a></li>
                    </ul>
                </div>
                <!-- Kolom 4 -->
                <div class="col-md-1">
                    <h5>Politik</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Pilkada</a></li>
                        <li><a href="#">KPU</a></li>
                        <li><a href="#">Bawaslu</a></li>
                        <li><a href="#">Caleg</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Politik</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Pilkada</a></li>
                        <li><a href="#">KPU</a></li>
                        <li><a href="#">Bawaslu</a></li>
                        <li><a href="#">Caleg</a></li>
                    </ul>
                </div>
                <!-- Kolom Subscribe -->
                <div class="col-md-4">
                    <h5>Keep Up to Date with the Most Important News</h5>
                    <form class="d-flex mt-2">
                        <input
                            type="email"
                            class="form-control me-2"
                            placeholder="E-mail" />
                        <button class="btn btn-danger" type="submit">Subscribe</button>
                    </form>
                    <small class="d-block mt-2">Dengan menekan tombol Subscribe, Anda menyetujui
                        <a href="#">Kebijakan Privasi</a> dan
                        <a href="#">Syarat Penggunaan</a> kami.</small>
                </div>
            </div>

            <!-- Footer bawah -->
            <div class="row mt-4 pt-3 border-top">
                <div class="col-md-6">
                    <p>© 2024 Berinti.id Hak Cipta Dilindungi.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#">Syarat Penggunaan</a> |
                    <a href="#">Kebijakan Privasi</a> | <a href="#">Beli Sekarang</a>
                </div>
            </div>

            <!-- Ikon Sosial -->
            <div class="text-center mt-3">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </footer>

    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>