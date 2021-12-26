<?php 
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=laporanPembayaran.xls");
header("Pragama: no-cache");
header("Expires: 0");
?>
<table id="example1" class="table table-bordered table-striped" border="2">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Konsumen</th>
      <th>Nomor Invoice</th>
      <th>Jumlah Transfer</th>
      <th>Tanggal Transfer</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach ($databayar as $db) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?= $db['customer_username']; ?></td>
        <td><?= $db['no_invoice']; ?></td>
        <td>Rp. <?= $db['jmlh_transper']; ?></td>
        <td><?= $db['tanggal_transper']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
