<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - PaudQu Nurul Hidayah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <img src="" alt="">
                                <h5 class="card-title text-center pb-0 fs-4">PAUDQU NURUL HIDAYAH
                                </h5>
                            </div><!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Registrasi
                                        </h5>
                                        <p class="text-center small">Login Aplikasi Pendaftaran Santri</p>
                                    </div>

                                    <?php
                                    if (isset($_SESSION['pesan_registrasi'])) { ?>

                                        <div class="alert alert-success">
                                            <?= $_SESSION['pesan_registrasi'] ?>
                                        </div>

                                    <?php }

                                    if (isset($_SESSION['login_error'])) { ?>

                                        <div class="alert alert-danger">
                                            <?= $_SESSION['login_error'] ?>
                                        </div>

                                    <?php }
                                    session_destroy();
                                    // unset($_SESSION['login_error']);
                                    ?>

                                    <form class="row g-3 needs-validation" method="POST" action="<?= base_url('auth/proses') ?>">
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="username" class="form-control" id="yourUsername" placeholder="Masukan Username" required>
                                                <div class="invalid-feedback">Masukan Username.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <input type="email" name="email" class="form-control" id="yourUsername" placeholder="Masukan Email" required>
                                                <div class="invalid-feedback">Masukan Email</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Masukan Password" required>
                                            <div class="invalid-feedback">Masukan Password!</div>
                                        </div>
                                        <div class="col-12 ">
                                            <button class="btn btn-primary w-100" type="submit">Regstrasi</button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <label for="yourPassword" class="form-label">sudah punya akun?</label>
                                            <a href="<?= base_url('auth') ?>">Login</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </section>

        </div>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/chart.js/chart.min.js"></script>
    <script src="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>assets/NiceAdmin/assets/js/main.js"></script>

</body>

</html>