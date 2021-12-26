<div class="box-header with-border">
   <h3 class="box-title alert alert-info">Konfirmasi pembayaran apakah Pembeli sudah men-transfer nominal yang ditentukan!.</h3>
</div>
<form action="<?= base_url('AdminMain/edit_datajual'); ?>" method="post" enctype="multipart/form-data" role="form">
   <div class="box-body">
      <input type="hidden" name="id" value="<?= $data_pembeli["order_id"]; ?>">
      <div class="form-group">
         <label for="status">Brand Name</label>
         <select class="form-control" name="status" id="status">
            <option value=''>- Pilih -</option>
            <option value="belum" <?php if($data_pembeli['status'] == "belum"){ echo 'selected'; } ?>>Belum Bayar</option>
            <option value="proses" <?php if($data_pembeli['status'] == "proses"){ echo 'selected'; } ?>>Proses Pembayaran</option>
            <option value="selesai" <?php if($data_pembeli['status'] == "selesai"){ echo 'selected'; } ?>>Pembayaran selesai</option>
         </select>
         <?= form_error('status', '<small class="text-danger">', '<small>'); ?>
      </div>
      <div class="form-group">
         <label>Nama Pemesan</label>
         <input type="text" class="form-control" name="nama_pemesan" value="<?= $data_pembeli["customer_username"]; ?>"readonly>
      </div>
      <div class="form-group">
         <label>Harga Pembelian</label>
         <input type="text" class="form-control" name="total" value="<?= $data_pembeli["total"]; ?>" readonly>
      </div>
      <div class="form-group">
         <label>Alamat Pembeli</label>
         <textarea name="alamat" class="form-control textarea" rows="3" readonly><?= $data_pembeli["alamat"]; ?></textarea>
      </div>
      <div class="form-group">
         <label for="kurir">Kurir</label>
         <input type="text" class="form-control" name="kurir" id="kurir" value="<?= $data_pembeli["kurir"]; ?>" readonly>
      </div>
      
      <div class="row">
         <div class="col-md-6">
            <p>Gambar Produk</p>
            <img src="<?= base_url('assets/images/'.$data_pembeli['tshirt_image']); ?>" alt="<?=$data_pembeli['tshirt_name']; ?>" width="100">
         </div>
      </div>
      <div class="checkbox">
         <label>
            <input type="checkbox"> Are you sure to add?
         </label>
      </div>
   </div>

   <div class="box-footer">
      <input type="submit" class="btn btn-primary nilai" name="submit" value="simpan">

   </div>
</form>