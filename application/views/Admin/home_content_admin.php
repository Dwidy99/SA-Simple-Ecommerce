
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <a href="<?= base_url('AdminMain/addproduk'); ?>" class="btn btn-primary" style="margin-bottom:20px; ">Tambah Data Produk</a>
    <tr>
      <th>No</th>
      <th>Gambar Produk</th>
      <th>Nama Produk</th>
      <th>Harga Produk</th>
      <th>Deskripsi Produk</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; foreach ($produk as $p) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td>
          <img src="<?= base_url('assets/images/'.$p['tshirt_image']); ?>" width="70" height="70" />
        </td>
        <td><?= $p['tshirt_name']; ?></td>
        <td>Rp. <?= $p['tshirt_price']; ?></td>
        <td width="30%"><?= strip_tags(substr($p['product_description'], 0, 200)); ?></td>
        <td>
          <a href="<?= base_url('AdminMain/editproduk/'.$p['id']); ?>" class="btn btn-primary btn-xs">Edit</a>
          ||
          <a href="<?= base_url('AdminMain/hapus/'.$p['id']); ?>" class="btn btn-primary btn-xs hapus-databelanja">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
