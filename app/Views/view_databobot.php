<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Penentuan Media Promosi</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-pz0JOy2A2X1fErEX5f4zZl27DEIeR3h3bGnBpf5lBFjxFWu9j3pzZ1/KtO6I9s3OIVCs69zjrFr8zPeU/dP2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Gaya Tambahan -->
    <style>
        /* Tabel berwarna ungu muda */
        .table-bordered,
        .table-bordered th,
        .table-bordered td,
        .table-striped tbody tr:nth-child(odd) td {
            background-color: #f0e6f7;
        }

        /* Button dengan gradasi ungu */
        .btn-purple {
            background: linear-gradient(to right, #8e44ad, #9b59b6);
            color: #fff;
            border: none; /* Tanpa border */
        }

        .btn-purple:hover {
            background: linear-gradient(to right, #9b59b6, #8e44ad);
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>SPK Penentuan Media Promosi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?php echo site_url('Home/dashboard');?>">Home</a></li>
                                <li class="breadcrumb-item active">Data Bobot</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tabel Data Bobot</h3>
                                </div>
                                <!-- /.card-header -->

                                <div class="card-body">
                                    <p>
                                        <a href="<?php echo site_url('Home/tambahbobot'); ?>" class="btn btn-purple">Tambah Data Bobot</a>
                                    </p>
                                    <!-- <table id="example1" class="table table-bordered table-striped"> -->
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>Nama Bobot</th>
                                                <th>Nilai Bobot</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no=0;
                                            foreach($dataBobot as $row):
                                                $no++;
                                            ?>
                                                <tr>
                                                    <th> <?= $no; ?></th>
                                                    <td><?= $row->kode; ?></td>
                                                    <td><?= $row->nama_kriteria; ?></td>
                                                    <td><?= $row->nama_bobot; ?></td>
                                                    <td><?= $row->nilai; ?></td>

                                                    <td>
                                                    <a href="<?= site_url('Home/formeditbobot/' . $row->id_bobot) ?>" class="btn btn-primary">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <form action="<?= site_url('Home/deletebobot/' . $row->id_bobot) ?>" method="post"
                                                        style="display:inline;">
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="_method" value="DELETE" />
                                                        <button type="submit" class="btn btn-link text-danger"
                                                            onclick="return confirm('Apakah Anda yakin ingin menghapus bobot ini?')"><i class="fas fa-trash-alt fa-lg"></i></button>
                                                    </form>
                                                    </td>

                                                </tr>

                                            <?php
                                            endforeach;
                                            ?>

                                        </tbody>

                                    </table>
                                </div>

                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

            </section>
            <!-- /.content -->
        </div>

    </div>

    <!-- Bootstrap JS dan Script Tambahan -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
