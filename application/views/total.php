<table>
  <tr>
    <td>
      Nama Barang
    </td>
    <td>
      <?php echo $query->nama_barang; ?>
    </td>
  </tr>
  <tr>
    <td>
      Jumlah
    </td>
    <td>
      <?php echo $query->jumlah; ?>
    </td>
  </tr>
  <tr>
    <td>
      Total Harga
    </td>
    <td>
      <?php echo $query->total_harga; ?>
    </td>
  </tr>
</table>
<a href="" onclick="window.print()">print</a> <a href="<?php echo site_url('pegawai'); ?>">kembali</a>
