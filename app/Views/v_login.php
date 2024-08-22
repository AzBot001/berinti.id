<?= $this->extend('template-login/template'); ?>

<?= $this->section('content-login'); ?>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="mt-5 col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand mt-5">
                        <img src="assets-home/img/logo.png" alt="logo" width="300">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <?php if (session()->getFlashdata('pesanlogin')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="fas fa-check fe-16 mr-2"></span> <?= session()->getFlashdata('pesanlogin'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif ?>
                        <div class="card-body">
                            <form method="POST" action="loginproses" class="needs-validation" novalidate="">
                                <?= csrf_field() ?>
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input id="email" type="text" class="form-control" placeholder="Username" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your Username
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" placeholder="Password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>