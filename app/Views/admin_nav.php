<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Media Promosi</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-pz0JOy2A2X1fErEX5f4zZl27DEIeR3h3bGnBpf5lBFjxFWu9j3pzZ1/KtO6I9s3OIVCs69zjrFr8zPeU/dP2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .main-sidebar {
            background-color: #85399e;
        }

        .brand-link {
            background-color: #85399e;
            color: #fff;
            text-align: center;
        }

        .brand-link img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
        }

        .brand-divider {
            border-bottom: 0.5px solid #fff;
            margin: 4px 0;
        }

        .brand-text {
            display: block;
            margin-top: 5px;
            font-size: 20px;
        }

        .nav-sidebar .nav-link {
            color: #fff;
        }

        .nav-sidebar .nav-link:hover {
            background-color: #64167d;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <base href="<?= base_url("assets") ?>/">
            <a href="<?php echo site_url('Home/dashboard');?>" class="brand-link text-center">
                <img src="dist/img/nn.jpg" alt="Logo NN" class="brand-image img-circle elevation-5" style="opacity: .8">
                <span class="brand-text font-weight-light">SPK Media Promosi</span>
            </a>
            <!-- <div class="brand-divider"></div> -->

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <a href="<?php echo site_url('Home/dashboard');?>" class="nav-link">
                            <i class="nav-icon fas fa-home fa-lg"></i>
                            <p style="font-weight: bold; font-size: 14px; margin-right: 10px;">
                                DASHBOARD
                            </p>
                        </a>

                        <li class="nav-item">
                            <a href="<?php echo base_url('/viewmebel'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-laptop"></i>
                                <p>
                                    Master Data
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home/viewdatamedia');?>" class="nav-link">
                                        <i class="fa fa-copy nav-icon" style="font-size: 14px;"></i>
                                        <p>Data Media Promosi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home/viewdatakriteria');?>" class="nav-link">
                                        <i class="fa fa-copy nav-icon" style="font-size: 14px;"></i>
                                        <p>Data Kriteria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home/viewdatabobot');?>" class="nav-link">
                                        <i class="fa fa-copy nav-icon" style="font-size: 14px;"></i>
                                        <p>Data Bobot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home/viewdatakonversi');?>" class="nav-link">
                                        <i class="fa fa-copy nav-icon" style="font-size: 14px;"></i>
                                        <p>Data Alternatif</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/viewmebel'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-calculator"></i>
                                <p>
                                    Proses Penilaian
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home/viewnormalisasi');?>" class="nav-link">
                                        <i class="fa fa-star nav-icon" style="font-size: 14px;"></i>
                                        <p>Matriks Normalisasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home/viewnilaioptimasi');?>" class="nav-link">
                                        <i class="fa fa-star nav-icon" style="font-size: 14px;"></i>
                                        <p>Matriks Nilai Optimasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home/viewmaxmin');?>" class="nav-link">
                                        <i class="fa fa-star nav-icon" style="font-size: 14px;"></i>
                                        <p>Tabel Nilai Optimasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home/viewranking');?>" class="nav-link">
                                        <i class="fa fa-star nav-icon" style="font-size: 14px;"></i>
                                        <p>Perangkingan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('Home/viewakhir');?>" class="nav-link">
                                        <i class="fa fa-star nav-icon" style="font-size: 14px;"></i>
                                        <p>Hasil Keputusan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>

    <!-- Bootstrap JS dan Script Tambahan -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
