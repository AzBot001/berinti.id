<?= $this->extend('admin-pages/template/header'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pegawai</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Data Pegawai</div>
            </div>
        </div>
        <h2 class="section-title">Data Pegawai</h2>
        <p class="section-lead">
            Halaman Berisi data Pegawai di Berinti.id
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
                        <a href="tambah_pegawai" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> DATA PEGAWAI</a>
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pegawai</th>
                                        <th>Jabatan</th>
                                        <th>No HP</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($rp as $d) :
                                    ?>
                                        <tr>
                                            <td class="align-middle"><?= $i++; ?> </td>
                                            <td class="align-middle"><?= $d['nama_pegawai'] ?></td>
                                            <td class="align-middle"><?= $d['jabatan'] ?></td>
                                            <td class="align-middle"><?= $d['nohp'] ?></td>
                                            <td class="align-middle">
                                                <img src="foto/<?= $d['foto'] ?>" class="rounded-circle" width="50" alt="">
                                            </td>
                                            <td class="align-middle">
                                                <form action="<?= base_url(); ?>hapus_pegawai/<?= $d['id_pegawai']; ?>" method="post">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <button onclick="return confirm('Apakah Anda Yakin?');" type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
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
</div>
<?= $this->endSection(); ?>