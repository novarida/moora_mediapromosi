<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>
    Form Data Media Promosi
  </title>
  
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
              <li class="breadcrumb-item"><a href="<?php echo site_url('Home/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item active">Data Media Promosi</li>
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
                <h2>Form Data Media Promosi</h2>
              </div>
              <div class="card-body">
                <?php if (isset($validation)): ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
                  </div>
                <?php endif; ?>

                <form method="post"
                  action="<?= isset($media) ? base_url('Home/updatemedia/' . $media['id_media']) : base_url('Home/tambahmedia') ?>">
                  <div class="form-group">
                    <label for="id_media">ID Media</label>
                    <input type="text" class="form-control" name="id_media"
                      value="<?= set_value('id_media', isset($media) ? $media['id_media'] : '') ?>">
                  </div>

                  <div class="form-group">
                    <label for="nama_media">Nama Media</label>
                    <input type="text" class="form-control" name="nama_media"
                      value="<?= set_value('nama_media', isset($media) ? $media['nama_media'] : '') ?>">
                  </div>

                  <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" name="jumlah"
                      value="<?= set_value('jumlah', isset($media) ? $media['jumlah'] : '') ?>">
                  </div>

                  <div class="form-group">
                    <label for="pj_media">Penanggung Jawab</label>
                    <input type="text" class="form-control" name="pj_media"
                      value="<?= set_value('pj_media', isset($media) ? $media['pj_media'] : '') ?>">
                  </div>

                  <button type="submit" class="btn btn-submit">
                    <?= isset($media) ? 'Update' : 'Tambah' ?> media
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
