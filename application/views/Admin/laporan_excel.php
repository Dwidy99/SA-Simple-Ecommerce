<?php 
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=laporan.xls");
header("Pragama: no-cache");
header("Expires: 0");
?>
<table id="example1" class="table table-bordered table-striped" border="2">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Produk</th>
      <th>Nama Pemesan</th>
      <th>Harga Pembelian</th>
      <th>Alamat Pemesan</th>
      <th>Kurir</th>
      <th>Status Pembayaran</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach ($datajual as $dj) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td>
          <?php echo $dj['tshirt_name']; ?>
        </td>
        <td><?= $dj['customer_username']; ?></td>
        <td>Rp. <?= $dj['total']; ?></td>
        <td><?= $dj['alamat']; ?></td>
        <td><?= $dj['kurir']; ?></td>
        <td><?= $dj['status']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
