<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Data Kriteria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
          background-color: #f2f2f2;
        }

        .container {
          margin-top: 50px;
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

        .form-group {
          margin-bottom: 20px;
        }

        .btn-submit {
          background-color: #4e3d85;
          color: white;
          border-radius: 8px;
          padding: 10px 20px;
        }

        .btn-view {
          background: none;
          border: none;
          text-decoration: underline;
          cursor: pointer;
        }

        .btn-view:focus {
          outline: none;
        }
    </style>
</head>

<body>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>SPK Penentuan Media Promosi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('Home/dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Data Kriteria</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <h2>Form Data Kriteria</h2>
                            </div>
                            <div class="card-body">
                                <?php if (isset($validation)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                <?php endif; ?>

                                <form method="post"
                                    action="<?= isset($kriteria) ? base_url('Home/updatekriteria/' . $kriteria['id_kriteria']) : base_url('Home/tambahkriteria') ?>">
                                    <div class="form-group">
                                        <label for="id_kriteria">ID Kriteria</label>
                                        <input type="text" class="form-control" name="id_kriteria"
                                            value="<?= set_value('id_kriteria', isset($kriteria) ? $kriteria['id_kriteria'] : '') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="kode">Kode kriteria</label>
                                        <input type="text" class="form-control" name="kode"
                                            value="<?= set_value('kode', isset($kriteria) ? $kriteria['kode'] : '') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_kriteria">Nama Kriteria</label>
                                        <input type="text" class="form-control" name="nama_kriteria"
                                            value="<?= set_value('nama_kriteria', isset($kriteria) ? $kriteria['nama_kriteria'] : '') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nilai_kriteria">Nilai Kriteria</label>
                                        <input type="text" class="form-control" name="nilai_kriteria"
                                            value="<?= set_value('nilai_kriteria', isset($kriteria) ? $kriteria['nilai_kriteria'] : '') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="tipe">Tipe Kriteria</label>
                                        <input type="text" class="form-control" name="tipe"
                                            value="<?= set_value('tipe', isset($kriteria) ? $kriteria['tipe'] : '') ?>">
                                    </div>

                                    <button type="submit" class="btn btn-submit">
                                        <?= isset($kriteria) ? 'Update' : 'Tambah' ?> kriteria
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
