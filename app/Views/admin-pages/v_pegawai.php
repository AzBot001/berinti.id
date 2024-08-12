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
                        <a href="tambah_pegawai" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> DATA Pegawai</a>
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
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">Azwar Ramadhan</td>
                                        <td class="align-middle">Software Developer</td>
                                        <td class="align-middle">081356311627</td>
                                        <td class="align-middle">
                                            <img src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="50" alt="">
                                        </td>
                                        <td class="align-middle">
                                            <form action="">
                                                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">2</td>
                                        <td class="align-middle">Azwar Ramadhan</td>
                                        <td class="align-middle">Software Developer</td>
                                        <td class="align-middle">081356311627</td>
                                        <td class="align-middle">
                                            <img src="assets/img/avatar/avatar-4.png" class="rounded-circle" width="50" alt="">
                                        </td>
                                        <td class="align-middle">
                                            <form action="">
                                                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">3</td>
                                        <td class="align-middle">Azwar Ramadhan</td>
                                        <td class="align-middle">Software Developer</td>
                                        <td class="align-middle">081356311627</td>
                                        <td class="align-middle">
                                            <img src="assets/img/avatar/avatar-3.png" class="rounded-circle" width="50" alt="">
                                        </td>
                                        <td class="align-middle">
                                            <form action="">
                                                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
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