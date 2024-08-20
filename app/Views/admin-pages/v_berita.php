<?= $this->extend('admin-pages/template/header'); ?>

<?= $this->section('content'); ?>
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
}

?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Berita</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Data Berita</div>
            </div>
            <?php if (session()->getFlashdata('pesanlogout')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="fas fa-check fe-16 mr-2"></span> <?= session()->getFlashdata('pesanlogout'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif ?>
        </div>
        <h2 class="section-title">Data Berita</h2>
        <p class="section-lead">
            Halaman Berisi data Berita di Berinti.id
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= session()->getFlashdata('pesan'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif ?>
                        <?php if (session()->getFlashdata('hapus')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= session()->getFlashdata('hapus'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif ?>
                        <a href="vtambah_berita" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> DATA BERITA</a>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul Berita</th>
                                        <th>Editor</th>
                                        <th>Kategori</th>
                                        <th>Tanggal Upload</th>
                                        <th>Jumlah Views</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($ber as $bd):
                                    ?>
                                        <tr>
                                            <td class="align-middle"><?= $i++ ?></td>
                                            <td class="align-middle"><?= $bd['judul'] ?></td>

                                            <td class="align-middle">
                                                <?php foreach ($berjoin as $bj): ?>
                                                    <?= $bj->nama_pegawai ?>
                                                <?php endforeach; ?>

                                            </td>
                                            <td class="align-middle">
                                                <?php if ($bj->id_subkategori != 0) { ?>
                                                    <?= $bj->nama_subkategori ?>
                                                <?php } else {
                                                    echo 'lainnya';
                                                }
                                                ?>
                                            </td>
                                            <td class="align-middle"><?= merubah_tanggal($bd['tgl_upload']) ?></td>
                                            <td class="align-middle"><?= $bd['jumlah_view'] ?></td>
                                            <td class="align-middle">
                                                <form action="hapus_ber/<?= $bd['id_berita'] ?>" method="post">
                                                    <?php foreach ($lb as $lds):
                                                        if ($bd['id_berita'] == $lds->id_berita) {
                                                    ?>
                                                            <input type="hidden" name="id[]" value="<?= $lds->id ?>">
                                                    <?php }
                                                    endforeach ?>
                                                    <a href="vedit_berita/<?= $bd['id_berita'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                    endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>