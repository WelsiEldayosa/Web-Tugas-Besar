<!DOCTYPE html>
<html>




<div class="container">
          
  <table class="table table-striped table-bordered" height="40%" width="50%" style="border-style:solid" align="center">
  <br>
  <h3 align="center" style="color:#000000"><i><b>Bukti Pembayaran anda, Tunjukkan kepada petugas </b></i></h3><br>
  <thead>
    <tr class="x">
    <th>Kode Barang</th>
    <td><?php echo $query->kode_barang; ?></td>
      </tr>
    <tr class="y">
    <th>Nama Barang</th>
    <td><?php echo $query->nama_barang; ?></td>
      </tr>
    <tr class="x">
    <th>Jumlah</th>
    <td><?php echo $query->jumlah; ?></td>
      </tr>
    <tr class="y">
    <th>Total Harga</th>
    <td><?php echo $query->total_harga; ?></td>
    </tr>
    </thead>

  <?php
    
  ?>
  <center><a href="" onclick="window.print()">PRINT</a> <a href="<?php echo site_url('pegawai'); ?>">KEMBALI</a></center>


  </table>
</div>

</body>