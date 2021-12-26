<div class="box-header with-border">
   <h3 class="box-title">Tambah Data Produk</h3>
</div>
<form action="<?= base_url('AdminMain/simpaneditproduk'); ?>" method="post" enctype="multipart/form-data" role="form">
   <div class="box-body">
      <input type="hidden" name="id" value="<?= $data_produk["id"]; ?>">
      <div class="form-group">
         <label for="tshirt_name">Nama Produk</label>
         <input type="text" class="form-control" name="tshirt_name" id="tshirt_name" value="<?= $data_produk["tshirt_name"]; ?>" placeholder="Nama Produk"
         required="">
         <?= form_error('tshirt_name', '<small class="text-danger">', '<small>'); ?>
      </div>
      <div class="form-group">
         <label for="sluga">Url Produk/Slug</label>
         <input type="text" class="form-control" name="sluga" id="sluga" value="<?= $data_produk["sluga"]; ?>"
         placeholder="Masukan url Produk/slug" required="">
         <?= form_error('sluga', '<small class="text-danger">', '<small>'); ?>
      </div>
      <div class="form-group">
         <label for="tshirt_price">Harga Produk</label>
         <input type="text" class="form-control" name="tshirt_price" id="tshirt_price" placeholder="Harga Produk" value="<?= $data_produk["tshirt_price"]; ?>"
         required="">
         <?= form_error('tshirt_price', '<small class="text-danger">', '<small>'); ?>
      </div>
      <div class="form-group">
         <label for="harga_coret">Harga Produk Coret</label>
         <input type="number" class="form-control" name="harga_coret" id="harga_coret" value="<?= $data_produk["harga_coret"]; ?>"
         placeholder="Harga Produk exp=10000" required="">
         <?= form_error('harga_coret', '<small class="text-danger">', '<small>'); ?>
      </div>
      <div class="form-group">
         <label for="brand_id">Brand Name</label>
         <select class="form-control" name="brand_id" id="brand_id">
            <option value=''>- Pilih -</option>
            <?php foreach ($cetakbrand as $value): ?>
               <?php if ($data_produk['brand_id'] == $value['brand_id']): ?>
                  <option value="<?= $value['brand_id']; ?>" selected><?= $value['brand_name']; ?></option>
               <?php else : ?>
                  <option value="<?= $value['brand_id']; ?>"><?= $value['brand_name']; ?></option>
               <?php endif ?>
            <?php endforeach; ?>
         </select>
         <?= form_error('brand_id', '<small class="text-danger">', '<small>'); ?>
      </div>
      <div class="form-group">
         <label for="produk_description">Deskripsi Produk</label>
         <textarea name="produk_description" class="form-control textarea" id="produk_description" rows="3"><?= $data_produk["product_description"]; ?></textarea>
         <?= form_error('produk_description', '<small class="text-danger">', '<small>'); ?>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="form-group">
               <input class="form-control" type="file" name="tshirt_image">
               <p class="help-block">SILAHKAN UPLOAD GAMBAR PRODUK </p>
            </div>
         </div>
         <div class="col-md-6">
            <img src="<?= base_url('assets/images/'.$data_produk['tshirt_image']); ?>" alt="<?=$data_produk['tshirt_name']; ?>" width="100">
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