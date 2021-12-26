
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <h3>Data Pejualan</h3>
    <a href="<?= base_url('AdminMain/cetak'); ?>" class="btn btn-primary" style="margin-bottom:20px; ">Cetak Laporan</a>
    <tr>
      <th>No</th>
      <th>Gambar Produk</th>
      <th>Nama Pemesan</th>
      <th>Harga Pembelian</th>
      <th>Alamat Pemesan</th>
      <th>Kurir</th>
      <th>Status Bayar</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach ($datajual as $dj) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td>
          <img src="<?= base_url('assets/images/'.$dj['tshirt_image']); ?>" width="70" height="70" />
        </td>
        <td><?= $dj['customer_username']; ?></td>
        <td>Rp. <?= $dj['total']; ?></td>
        <td><?= $dj['alamat']; ?></td>
        <td><?= $dj['kurir']; ?></td>
        <td><?= $dj['status']; ?></td>
        <td>
          <a href="<?= base_url('AdminMain/edit_datajual/'.$dj['order_id']); ?>" class="btn btn-primary btn-xs" style="pointer-events: none">Edit</a>
          ||
          <a href="<?= base_url('AdminMain/hapus_datajual/'.$dj['order_id']); ?>" class="btn btn-primary btn-xs hapus-databelanja">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
