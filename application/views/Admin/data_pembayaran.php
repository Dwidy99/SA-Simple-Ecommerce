
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <h3>Data Pembayaran</h3>
    <a href="<?= base_url('AdminMain/cetakPembayaran'); ?>" class="btn btn-primary" style="margin-bottom:20px; ">Cetak Laporan</a>
    <tr>
      <th>No</th>
      <th>Nama Konsumen</th>
      <th>Nomor Invoice</th>
      <th>Jumlah Transfer</th>
      <th>Gambar Bukti Transfer</th>
      <th>Tanggal Transfer</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach ($databayar as $db) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?= $db['customer_username']; ?></td>
        <td><?= $db['no_invoice']; ?></td>
        <td>Rp. <?= $db['jmlh_transper']; ?></td>
        <td>
          <img src="<?= base_url('assets/images/'.$db['gambar_transper']); ?>" width="70" height="70" />
        </td>
        <td><?= $db['tanggal_transper']; ?></td>
        <td>
          <a href="<?= base_url('AdminMain/edit_databayar/'.$db['id_pembayaran']); ?>" class="btn btn-primary btn-xs">Edit</a>
          ||
          <a href="<?= base_url('AdminMain/hapus_databayar/'.$db['id_pembayaran']); ?>" class="btn btn-primary btn-xs hapus-databelanja">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
