<?= $this->extend('admin-pages/template/header'); ?>

<?= $this->section('content'); ?>
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
        </div>
        <h2 class="section-title">Data Berita</h2>
        <p class="section-lead">
            Halaman Berisi data Berita di Berinti.id
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
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
                                        <th>Label</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">TIM RRQ berhasil menjuarai Point Blank</td>
                                        <td class="align-middle">Azwar Ramadhan</td>
                                        <td class="align-middle">Esport</td>
                                        <td class="align-middle">29 November 2024</td>
                                        <td class="align-middle">23</td>
                                        <td class="align-middle"><span class="badge badge-warning">Daerah</span> <span class="badge badge-warning">Kabupaten</span></td>
                                        <td class="align-middle">
                                            <form action="">
                                                <a href="" class="btn btn-info btn-sm"><i class="fas fa-search"></i> Detail</a>
                                                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">TIM RRQ berhasil menjuarai Point Blank</td>
                                        <td class="align-middle">Azwar Ramadhan</td>
                                        <td class="align-middle">Esport</td>
                                        <td class="align-middle">29 November 2024</td>
                                        <td class="align-middle">23</td>
                                        <td class="align-middle"><span class="badge badge-warning">Daerah</span> <span class="badge badge-warning">Kabupaten</span></td>
                                        <td class="align-middle">
                                            <form action="">
                                                <a href="" class="btn btn-info btn-sm"><i class="fas fa-search"></i> Detail</a>
                                                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">1</td>
                                        <td class="align-middle">TIM RRQ berhasil menjuarai Point Blank</td>
                                        <td class="align-middle">Azwar Ramadhan</td>
                                        <td class="align-middle">Esport</td>
                                        <td class="align-middle">29 November 2024</td>
                                        <td class="align-middle">23</td>
                                        <td class="align-middle"><span class="badge badge-warning">Daerah</span> <span class="badge badge-warning">Kabupaten</span></td>
                                        <td class="align-middle">
                                            <form action="">
                                                <a href="" class="btn btn-info btn-sm"><i class="fas fa-search"></i> Detail</a>
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