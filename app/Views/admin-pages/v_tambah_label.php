<?= $this->extend('admin-pages/template/header'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Label</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Tambah Data Label</div>
            </div>
        </div>
        <h2 class="section-title">Tambah Data Label</h2>
        <p class="section-lead">
            Halaman untuk menambah data label di Berinti.id
        </p>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="tlabel" method="post">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Nama Label</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-tags"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="nl" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                        <a href="label" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>