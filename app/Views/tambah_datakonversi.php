<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Alternatif</title>
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
                            <li class="breadcrumb-item active">Data Alternatif</li>
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
                      <h2>Form Data Alternatif</h2>
                    </div>
                    <div class="card-body">
                      <?php if (isset($validation)): ?>
                          <div class="alert alert-danger" role="alert">
                              <?= $validation->listErrors() ?>
                          </div>
                      <?php endif; ?>

                      <form method="post"
                          action="<?= isset($alternatif) ? base_url('Home/updatekonversi/' . $alternatif['id_konversi']) : base_url('Home/tambahkonversi') ?>">
                          <div class="form-group">
                              <label for="nama_media">Nama Media</label>
                              <input type="text" class="form-control" name="nama_media"
                                  value="<?= set_value('nama_media', isset($alternatif) ? $alternatif['nama_media'] : '') ?>">
                          </div>

                          <div class="form-group">
                              <label for="C1">C1</label>
                              <input type="text" class="form-control" name="C1"
                                  value="<?= set_value('C1', isset($alternatif) ? $alternatif['C1'] : '') ?>">
                          </div>

                          <div class="form-group">
                              <label for="C2">C2</label>
                              <input type="text" class="form-control" name="C2"
                                  value="<?= set_value('C2', isset($alternatif) ? $alternatif['C2'] : '') ?>">
                          </div>

                          <div class="form-group">
                              <label for="C3">C3</label>
                              <input type="text" class="form-control" name="C3"
                                  value="<?= set_value('C3', isset($alternatif) ? $alternatif['C3'] : '') ?>">
                          </div>

                          <div class="form-group">
                              <label for="C4">C4</label>
                              <input type="text" class="form-control" name="C4"
                                  value="<?= set_value('C4', isset($alternatif) ? $alternatif['C4'] : '') ?>">
                          </div>

                          <div class="form-group">
                              <label for="C5">C5</label>
                              <input type="text" class="form-control" name="C5"
                                  value="<?= set_value('C5', isset($alternatif) ? $alternatif['C5'] : '') ?>">
                          </div>

                          <button type="submit" class="btn btn-submit">
                              <?= isset($alternatif) ? 'Update' : 'Tambah' ?> Alternatif
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
