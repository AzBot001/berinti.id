<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title><?= $tittle ?></title>
    <base href="<?= base_url('assets'); ?>">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css" />

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css" />
    <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons.min.css" />
    <link rel="stylesheet" href="assets/modules/weather-icon/css/weather-icons-wind.min.css" />
    <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css" />
    <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css" />
    <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/components.css" />
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-94034622-3");
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle mr-1" />
                            <div class="d-sm-none d-lg-inline-block">
                                Hi! <?= session()->get('nama_pegawai') ?>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="logout" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- sidebar -->

            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html"><img src="assets/img/logo/logo.png" width="120" alt="" /></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html"><img src="assets/img/logo/b.png" width="40" alt=""></a>
                    </div>
                    <ul class="sidebar-menu mt-2">
                        <li class="menu-header">Dashboard</li>
                        <li class="<?= isset($tittle) && $tittle == 'Dashboard' ? 'active' : '' ?>">
                            <a class="nav-link" href="dashboard">
                                <i class="fas fa-home"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-header">Master Data</li>
                        <li class="<?= isset($tittle) && $tittle == 'Pegawai' ? 'active' : '' ?>">
                            <a class="nav-link" href="pegawai">
                                <i class="fas fa-user-edit"></i> <span>Pegawai</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="kategori">
                                <i class="fas fa-bookmark"></i> <span>Kategori</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="label">
                                <i class="fas fa-tags"></i> <span>Label</span>
                            </a>
                        </li>
                        <li class="menu-header">Artikel</li>
                        <li>
                            <a class="nav-link" href="berita">
                                <i class="fas fa-newspaper"></i> <span>Berita</span>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="index">
                                <i class="fas fa-video"></i> <span>Video</span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>


            <!-- Main Content -->
            <?= $this->renderSection('content'); ?>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018
                    <div class="bullet"></div>
                    Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right"></div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/modules/jquery.min.js"></script>
    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/modules/chart.min.js"></script>
    <script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="assets/modules/summernote/summernote-bs4.js"></script>
    <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <script src="assets/modules/datatables/datatables.min.js"></script>
    <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <!-- Page Specific JS File -->


    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/page/modules-datatables.js"></script>
    <script
        src="assets/tinymce/tinymce/tinymce.min.js"
        referrerpolicy="origin"></script>
        <script>
        // Event Read Too
        $(document).ready(function() {
            $(this)
                .contents()
                .find(".baten")
                .click(function() {
                    tinymce.activeEditor.execCommand(
                        "mceInsertContent",
                        false,
                        '<strong class="read__others">Baca Juga: <a href="' +
                        $(this).attr("data-url") +
                        '">' +
                        $(this).attr("data-title") +
                        "</a></strong>"
                    );
                    $("#myModal").modal("hide");
                });
        });
    </script>
    <script>
        tinymce.init({
            selector: "textarea#mytextarea",
            height: 850,
            plugins: "preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion",
            menubar: "file edit view insert format tools table help",
            toolbar: "undo redo | blocks fontfamily fontsize | readtoo | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview",
            setup: (editor) => {
                editor.ui.registry.addButton("readtoo", {
                    icon: "search",
                    tooltip: "Baca Juga",
                    onAction: () => $("#myModal").modal("show"),
                });
            },
            content_style: "body { font-family:Helvetica,Arial,sans-serif; font-size:16px }",
        });
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert").fadeTo(600, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 2000);
        });
    </script>
</body>

</html>