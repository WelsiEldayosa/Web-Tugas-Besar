
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Top navbar example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-success mb-4">
      <a class="navbar-brand" href="#">Toko Kita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <li><a class="nav-link" href="<?php echo site_url()?>/pegawai">Home<span class="sr-only">(current)</span></a></li>
            <a class="nav-link" href="<?php echo site_url()?>/jabatan">Admin<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo site_url()?>/anak">Profile<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <a href="<?php echo base_url('index.php/Login/logout') ?>" class="btn btn-secondary my-2 my-sm-0 ml-2">Logout</a>
        </form>
      </div>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1>PEMBELI</h1>
        <p class="lead">
          <?php 
echo 'Selamat Datang, '.$this->session->userdata('logged_in')['username']; ?>
        </p>
      </div>
  
  <div class="row">
  <h3>from beli</h3>
  <div class="col-md-8">
  <form method="post" action="<?php echo site_url('pegawai/total');?>">
    <div class="form-group">
    <label>Kode</label>
    <input name="kode_barang" type="text" class="form-control" value="<?php echo $query[0]->kode_barang; ?>" required="required" readonly>
    </div>
    <div class="form-group">
    <label>Nama Barang</label>
    <input name="nama_barang" type="text" class="form-control" value="<?php echo $query[0]->nama_barang; ?>" required="required" readonly>
    </div>
    <div class="form-group">
    <label>Harga</label>
    <input name="harga" type="text" class="form-control" value="<?php echo $query[0]->harga; ?>" required="required" readonly>
    </div>
    <div class="form-group">
    <label>Jumlah Beli</label>
    <input name="jumlah" type="text" class="form-control" placeholder="jumlah" required="required">
    </div>
    <div class="form-group">
    <label>Nama Pembeli</label>
    <input name="nama_pembeli" type="text" class="form-control" placeholder="nama" required="required">
    </div>
    
    <input name="fsimpan" type="submit" class="btn btn-sm btn-success" value="Beli">
    
    <a class="btn btn-sm btn-danger" href="<?php echo site_url('loginAnak');?>">Kembali</a>
   
  </form>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>

