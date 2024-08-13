<?= $this->extend('admin-pages/template/header'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Kategori</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Tambah Data Kategori</div>
            </div>
        </div>
        <h2 class="section-title">Tambah Data Kategori</h2>
        <p class="section-lead">
            Halaman untuk menambah data kategori di Berinti.id
        </p>
        <div class="row">
            <div class="col-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Kategori</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($kateg as $dk): ?>
                            <form action="edittkategori/<?= $dk->id_kategori ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-bookmark"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" name="nama_kategori" value="<?= $dk->nama_kategori ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Kategori</h4>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <?php foreach ($kateg as $dr):
                                    ?>
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Kategori</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($skat as $d) :
                                                    if ($d->id_kategori == $dr->id_kategori) {
                                                ?>
                                                        <tr>
                                                            <td class="align-middle"><?= $i++ ?></td>
                                                            <td class="align-middle"><?= $d->nama_subkategori ?></td>
                                                            <td class="align-middle">
                                                                <form action="<?= base_url() ?>hapus_subkategori/<?= $d->id_subkategori ?>" method="post">
                                                                    <?= csrf_field() ?>
                                                                    <?php if ($d->id_subkategori != '') : ?>
                                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#mdl2<?= $d->id_subkategori ?>"><i class=" fas fa-edit"></i></button>
                                                                    <?php endif; ?>
                                                                    <input type="text" name="ids" value="<?= $d->id_subkategori ?>">
                                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin ??')"><i class="fas fa-trash"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                <?php
                                                    }
                                                endforeach; ?>
                                            </tbody>
                                        </table>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
foreach ($skat as $dst) :
?>
    <div class="modal fade" tabindex="-1" role="dialog" id="mdl2<?= $dst->id_subkategori ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sub Kategori - Nama Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edittsubkategori/<?= $dst->id_subkategori ?>" method="post">
                        <?= csrf_field() ?>
                        <input type="text" name="namasubkategori" class="form-control" value="<?= $dst->nama_subkategori ?>">
                        <input type="hidden" name="idkategori" class="form-control" value="<?= $dst->id_kategori ?>">
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<?= $this->endSection(); ?>