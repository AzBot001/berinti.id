<?= $this->extend('admin-pages/template/header'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Berita</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item">Tambah Berita</div>
            </div>
        </div>
        <h2 class="section-title">Tambah Berita</h2>
        <p class="section-lead">
            Halaman untuk menambah berita di Berinti.id
        </p>
        <form action="">
            <div class="row">
                <div class="col-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Nama Wartawan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-newspaper"></i>
                                                </div>
                                            </div>
                                            <input
                                                type="text"
                                                class="form-control judul"
                                                placeholder="Judul Berita" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Isi Berita</label>
                                        <textarea id="mytextarea"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label>Gambar / Thumbnail</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-image"></i>
                                                </div>
                                            </div>
                                            <input
                                                type="file"
                                                class="form-control judul" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Caption Gambar</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-hashtag"></i>
                                                </div>
                                            </div>
                                            <input
                                                type="text"
                                                class="form-control judul"
                                                placeholder="Caption Gambar" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-bookmark"></i>
                                                </div>
                                            </div>
                                            <select name="" class="form-control" id="">
                                                <option value="" hidden>-Pilih Kategori-</option>
                                                <?php foreach ($kat as $kd): ?>
                                                    <optgroup label="<?= $kd['nama_kategori'] ?>">
                                                        <?php foreach ($subkat as $sd):
                                                            if ($kd['id_kategori'] == $sd->id_kategori) {
                                                        ?>
                                                                <option value=""><?= $sd->nama_subkategori ?></option>
                                                        <?php
                                                            }
                                                        endforeach; ?>
                                                    </optgroup>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Label</label>
                                        <div class="selectgroup selectgroup-pills">
                                            <?php foreach ($label as $ld): ?>
                                                <label class="selectgroup-item">
                                                    <input type="checkbox" name="value" value="HTML" class="selectgroup-input">
                                                    <span class="selectgroup-button"><?= $ld['nama_label'] ?></span>
                                                </label>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </section>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>aab</td>
                                <td><button class="btn btn-primary baten" data-title="a" data-url="google.com">Pilih</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>