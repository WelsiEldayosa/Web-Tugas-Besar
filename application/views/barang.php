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
    <link href="<?php echo base_url();?>assets/dataTables/datatables.min.css" rel="stylesheet">



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
            <li><a class="nav-link" href="<?php echo site_url()?>/barang">Data<span class="sr-only">(current)</span></a></li>
            <li><a class="nav-link" href="<?php echo site_url()?>/jabatan">Admin<span class="sr-only">(current)</span></a></li>
            <a class="nav-link" href="<?php echo site_url()?>/anak">Profile<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <a href="<?php echo base_url('index.php/Login/logout') ?>" class="btn btn-warning my-2 my-sm-0 ml-2">Logout</a>
        </form>
      </div>
    </nav>


<div class="jumbotron text-center">
  <h1>Riki Rhoma BOOK</h1> 
  <p>Lebih Baik kutu buku dari pada kutu beneran</p> 
  <form class="form-inline">
   </form>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Data Barang</h3>
		
		<a class="btn btn-sm btn-success" href="<?php echo site_url('tambah_barang'); ?>">Tambah Data</a>
		
	</div>
  
  
  <br>
	
	<table class="table table-bordered" cellpadding="5" id="tabel_data">
	<thead>
		<tr class="success">
			<th>No.</th>
			<th>Kode_Barang</th>
			<th>Nama_Barang</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Opsi</th>
		</tr>
			
	</thead>
	<tbody>
	
		<?php 
        $no=1;
        foreach ($query as $d) { 
        ?>
		<tr class="warning">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d->kode_barang; ?> </td>
			<td><?php echo $d->nama_barang; ?> </td>
			<td><?php echo $d->harga; ?> </td>
			<td><?php echo $d->stok; ?> </td>
			<td>
				<a onclick="return confirm('anda yakin ingin menghapusnya?')" title="Hapus" 
				href="<?php echo site_url('barang/hapus_barang/'.$d->kode_barang); ?>">
				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				|
				<a title="edit" href="<?php echo site_url('admin/edit_barang/'.$d->id_barang); ?>">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				<br>
				<!--<a class="btn btn-xs btn-info" title="Pasok Buku" href="<?php echo site_url('admin/pasok_buku/'.$d->id_buku); ?>">Pasok</a>-->
			
			</td>
			
		</tr>
		<?php
	}
	//}
		?>
	<table>
	
	<nav>
	<ul class="pagination">
	<?php/*
	for ($i=1; $i <= $hal; $i++){*/
		?>
		<li <?php //if($page==$i){ echo "class='active'";} ?>><a href="?menu=data_buku&hal=<?php //echo $i; ?>"><?php //echo $i ?></a></li>
		<?php
	//}
	?>
	
<?php $this->load->view('admin/footer');?>

<script type="text/javascript">
$(document).ready(function(){
    $('#tabel_data').DataTable( {
        "scroolX"           : true,
       // "scrollY"           : "350px",
        "scrollCollapse"    : true,
        "paging"            : true,
    } );        
});
</script>