<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Penentuan Media Promosi</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-pz0JOy2A2X1fErEX5f4zZl27DEIeR3h3bGnBpf5lBFjxFWu9j3pzZ1/KtO6I9s3OIVCs69zjrFr8zPeU/dP2w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Gaya Tambahan -->
    <style>
        .table-bordered,
        .table-bordered th,
        .table-bordered td,
        .table-striped tbody tr:nth-child(odd) td {
            background-color: #f0e6f7;
        }

        .btn-purple {
            background: linear-gradient(to right, #8e44ad, #9b59b6);
            color: #fff;
            border: none;
        }

        .btn-purple:hover {
            background: linear-gradient(to right, #9b59b6, #8e44ad);
        }

        .card {
          border-radius: 15px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
          background-color: #4e3d85;
          color: white;
          border-radius: 15px 15px 0 0;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .btn-primary {
            margin-top: 10px;
        }

        .btn-submit {
          background-color: #4e3d85;
          color: white;
          border-radius: 8px;
          padding: 10px 20px;
        }

        .btn-view:focus {
          outline: none;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
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
                                <li class="breadcrumb-item active">Data Kriteria</li>
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
                            <div class="card">
                                <div class="card-header text-center">
                                    <h2>Form Edit Kriteria</h2>
                                </div>
                                <div class="card-body">
                                    <!-- Display validation errors if any -->
                                    <?php if (isset($validation)): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $validation->listErrors() ?>
                                        </div>
                                    <?php endif; ?>

                                    <!-- Form to edit Kriteria -->
                                    <form method="post" action="<?= base_url('Home/editkriteria/' . $kriteria->id_kriteria) ?>">
                                        <div class="form-group">
                                            <label for="kode">Kode Kriteria</label>
                                            <input type="text" class="form-control" name="kode" value="<?= set_value('kode', $kriteria->kode) ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_kriteria">Nama Kriteria</label>
                                            <input type="text" class="form-control" name="nama_kriteria" value="<?= set_value('nama_kriteria', $kriteria->nama_kriteria) ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="nilai_kriteria">Nilai Kriteria</label>
                                            <input type="text" class="form-control" name="nilai_kriteria" value="<?= set_value('nilai_kriteria', $kriteria->nilai_kriteria) ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="tipe">Tipe Kriteria</label>
                                            <input type="text" class="form-control" name="tipe" value="<?= set_value('tipe', $kriteria->tipe) ?>">
                                        </div>

                                        <button type="submit" class="btn btn-submit">Update</button>
                                    </form>
                                </div>
                            </div>
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
