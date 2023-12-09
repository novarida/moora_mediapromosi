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
                                <li class="breadcrumb-item active">Hasil Optimasi</li>
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
                                    <h3 class="card-title">Tabel Hasil Perhitung Optimasi</h3>
                                </div>
                                <!-- /.card-header -->

                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>ID Konversi</th>
                                            <th>Alternatif</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                        </tr>

                                        <?php foreach ($dataOptimasi as $row): ?>
                                            <tr>
                                                <td>
                                                    <?= $row['id_konversi']; ?>
                                                </td>
                                                <td>
                                                    <?= $row['nama_media']; ?>
                                                </td>
                                                <td>
                                                    <?= round($row['C1'], 8); ?>
                                                </td>
                                                <td>
                                                    <?= round($row['C2'], 8); ?>
                                                </td>
                                                <td>
                                                    <?= round($row['C3'], 8); ?>
                                                </td>
                                                <td>
                                                    <?= round($row['C4'], 8); ?>
                                                </td>
                                                <td>
                                                    <?= round($row['C5'], 8); ?>
                                                </td>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
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