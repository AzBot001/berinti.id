<?= $this->extend('admin-pages/template/header'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Label</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Data Label</div>
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
        <h2 class="section-title">Data Label</h2>
        <p class="section-lead">
            Halaman Berisi data label di Berinti.id
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
                        <a href="tambah_label" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> DATA LABEL</a>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Label</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($rl as $d) :
                                    ?>
                                        <tr>
                                            <td class="align-middle"><?= $i++ ?></td>
                                            <td class="align-middle"><?= $d['nama_label'] ?></td>
                                            <td class="align-middle">
                                                <form action="<?= base_url(); ?>hapus/<?= $d['id_label']; ?>" method="post">
                                                    <a href="<?= base_url(); ?>vedit_label/<?= $d['id_label']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ??')"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sub Kategori - Wilayah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <ul class="list-group list">
                            <li class="list-group-item">Provinsi Gorontalo</li>
                            <li class="list-group-item">Kota Gorontalo</li>
                            <li class="list-group-item">Kabupaten Gorontalo</li>
                            <li class="list-group-item">Kabupaten Bone Bolango</li>
                            <li class="list-group-item">Kabupaten Boalemo</li>
                            <li class="list-group-item">Kabupaten Pohuwato</li>
                            <li class="list-group-item">Kabupaten Gorontalo Utara</li>
                        </ul>
                    </table>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>