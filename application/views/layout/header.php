<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/NiceAdmin/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">PaudQu Nurul Hidayah</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->
    </header>
    <!-- End Header -->


    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <!-- SIDEBAR USER -->
        <?php if ($this->session->userdata('akses') == 'member') : ?>
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-heading">Member</li>
                <li class="nav-item">
                    <a class="nav-link " href="index.html">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Edit Profile </span>
                    </a>

                </li><!-- End Components Nav -->
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('auth/logout') ?>">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Log out</span>
                    </a>
                </li>

                <!-- SIDEBAR ADMIN -->
            <?php elseif ($this->session->userdata('akses') == 'admin') : ?>
                <ul class="sidebar-nav" id="sidebar-nav">
                    <li class="nav-heading">Admin</li>
                    <li class="nav-item">
                        <a class="nav-link " href="index.html">
                            <i class="bi bi-grid"></i>
                            <span>Dashboard</span>
                        </a>
                    </li><!-- End Dashboard Nav -->

                    <hr class="sidebar-divider">
                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                            <i class="bi bi-menu-button-wide"></i><span>Kelas </span>
                        </a>

                    </li><!-- End Components Nav -->

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                            <i class="bi bi-journal-text"></i><span>Kegiatan</span>
                        </a>

                    </li><!-- End Forms Nav -->
                    <!-- End Tables Nav -->

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                            <i class="bi bi-bar-chart"></i><span>Pendaftaran</span><i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="charts-chartjs.html">
                                    <i class="bi bi-circle"></i><span>Dashboard Pendaftaran</span>
                                </a>
                            </li>
                            <li>
                                <a href="charts-apexcharts.html">
                                    <i class="bi bi-circle"></i><span>Data Pendaftaran</span>
                                </a>
                            </li>
                            <li>
                                <a href="charts-echarts.html">
                                    <i class="bi bi-circle"></i><span>Laporan Pendaftaran</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Charts Nav -->

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                            <i class="bi bi-gem"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="icons-bootstrap.html">
                                    <i class="bi bi-circle"></i><span>Identitas Sekolah</span>
                                </a>
                            </li>
                            <li>
                                <a href="icons-remix.html">
                                    <i class="bi bi-circle"></i><span>Tentang Sekolah</span>
                                </a>
                            </li>
                            <li>
                                <a href="icons-boxicons.html">
                                    <i class="bi bi-circle"></i><span>Kepala Sekolah</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Icons Nav -->

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="users-profile.html">
                            <i class="bi bi-person"></i>
                            <span>Profile</span>
                        </a>
                    </li><!-- End Profile Page Nav -->
                    <hr class="sidebar-divider">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="<?= base_url('auth/logout') ?>">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <span>Log out</span>
                        </a>
                    </li><!-- End Login Page Nav -->


                    <!-- End Error 404 Page Nav -->


                    <!-- End Blank Page Nav -->

                </ul>
            <?php endif; ?>

    </aside><!-- End Sidebar-->