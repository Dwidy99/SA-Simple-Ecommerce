<div class="box-header with-border">
   <h3 class="box-title alert alert-info">Konfirmasi pembayaran apakah Pembeli sudah men-transfer nominal yang ditentukan!.</h3>
</div>
<form action="<?= base_url('AdminMain/edit_databayar/'.$data_bayar["id_pembayaran"]); ?>" method="post" enctype="multipart/form-data" role="form">
   <div class="box-body">
      <div class="form-group">
         <label for="nama_pemesan">Nama Konsumen</label>
         <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" value="<?= $data_bayar["customer_username"]; ?>">
         <?= form_error('nama_pemesan', '<small class="text-danger">', '<small>'); ?>
      </div>
      <div class="form-group">
         <label>No Invoice</label>
         <input type="number" class="form-control" name="no_invoice" value="<?= $data_bayar["no_invoice"]; ?>">
         <?= form_error('no_invoice', '<small class="text-danger">', '<small>'); ?>
      </div>
      <div class="form-group">
         <label for="jmlh_transper">No Invoice</label>
         <input type="number" class="form-control" name="jmlh_transper" value="<?= $data_bayar["jmlh_transper"]; ?>">
         <?= form_error('jmlh_transper', '<small class="text-danger">', '<small>'); ?>
      </div>      
      <div class="row">
         <div class="col-md-6">
            <p>Gambar Produk</p>
            <img src="<?= base_url('assets/images/'.$data_bayar['gambar_transper']); ?>" alt="<?=$data_bayar['customer_username']; ?>" width="100">
         </div>
      </div>
   </div>

   <div class="box-footer">
      <input type="submit" class="btn btn-primary nilai" name="submit" value="simpan">

   </div>
</form>