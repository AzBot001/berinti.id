<?= $this->extend('admin-pages/template/header'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Kategori</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Data Kategori</div>
            </div>
        </div>
        <h2 class="section-title">Data Kategori</h2>
        <p class="section-lead">
            Halaman Berisi data kategori di Berinti.id
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
                        <a href="tambah_kategori" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> DATA KATEGORI</a>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kategori</th>
                                        <th>Sub Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($rk as $d) :
                                    ?>
                                        <tr>
                                            <td class="align-middle"><?= $i++ ?></td>
                                            <td class="align-middle"><?= $d['nama_kategori'] ?></td>
                                            <td class="align-middle"><button class="btn btn-sm btn-info" data-toggle="modal" data-target="#mdl<?= $d['id_kategori'] ?>">Sub Kategori</button></td>
                                            <td class="align-middle">
                                                <form action="">
                                                    <a href="vedit_kategori/<?= $d['id_kategori'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
    <?php
    foreach ($rk as $d) :
    ?>
        <div class="modal fade" tabindex="-1" role="dialog" id="mdl<?= $d['id_kategori'] ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sub Kategori - Nama Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped">
                            <ul class="list-group list">
                                <?php
                                foreach ($rk_s as $dd) :
                                    if ($dd->id_kategori == $d['id_kategori']) {

                                ?>
                                        <li class="list-group-item"><?= $dd->nama_subkategori ?></li>
                                <?php
                                    }
                                endforeach; ?>
                            </ul>
                        </table>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
</div>
<?= $this->endSection(); ?>