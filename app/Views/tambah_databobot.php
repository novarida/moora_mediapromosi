<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Form Data Bobot</title>

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
                            <li class="breadcrumb-item"><a href="<?php echo site_url('Home/dashboard'); ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Data Bobot</li>
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
                                <h2>Form Data Bobot</h2>
                            </div>
                            <div class="card-body">
                                <?php if (isset($validation)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->listErrors() ?>
                                    </div>
                                <?php endif; ?>

                                <form method="post"
                                    action="<?= isset($bobot) ? base_url('Home/updatebobot/' . $bobot['id_bobot']) : base_url('Home/tambahbobot') ?>">
                                    <div class="form-group">
                                        <label for="id_bobot">ID Bobot</label>
                                        <input type="text" class="form-control" name="id_bobot"
                                            value="<?= set_value('id_bobot', isset($bobot) ? $bobot['id_bobot'] : '') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="kode">Kode bobot</label>
                                        <input type="text" class="form-control" name="kode"
                                            value="<?= set_value('kode', isset($bobot) ? $bobot['kode'] : '') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_kriteria">Nama Kriteria</label>
                                        <input type="text" class="form-control" name="nama_kriteria"
                                            value="<?= set_value('nama_kriteria', isset($bobot) ? $bobot['nama_kriteria'] : '') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_bobot">Nama Bobot</label>
                                        <input type="text" class="form-control" name="nama_bobot"
                                            value="<?= set_value('nama_bobot', isset($bobot) ? $bobot['nama_bobot'] : '') ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nilai">Nilai Bobot</label>
                                        <input type="text" class="form-control" name="nilai"
                                            value="<?= set_value('nilai', isset($bobot) ? $bobot['nilai'] : '') ?>">
                                    </div>

                                    <button type="submit" class="btn btn-submit">
                                        <?= isset($bobot) ? 'Update' : 'Tambah' ?> Bobot
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
