<div class="box-header with-border">
   <h3 class="box-title">Tambah Data Produk</h3>
</div>
<form action="<?= base_url('AdminMain/simpan_produk'); ?>" method="post" enctype="multipart/form-data" role="form">
   <div class="box-body">
      <div class="form-group">
         <label for="exampleInputEmail1">Nama Produk</label>
         <input type="text" class="form-control" name="tshirt_name" id="exampleInputtext1" placeholder="Nama Produk"
            required="">
      </div>
      <div class="form-group">
         <label for="exampleInputEmail1">Url Produk/Slug</label>
         <input type="text" class="form-control" name="sluga" id="exampleInputtext1"
            placeholder="Masukan url Produk/slug" required="">
      </div>
      <div class="form-group">
         <label for="exampleInputEmail1">Harga Produk</label>
         <input type="text" class="form-control" name="tshirt_price" id="exampleInputtext1" placeholder="Harga Produk"
            required="">
      </div>
      <div class="form-group">
         <label for="exampleInputEmail1">Harga Produk Coret</label>
         <input type="number" class="form-control" name="harga_coret" id="exampleInputtext1"
            placeholder="Harga Produk exp=10000" required="">
      </div>
      <div class="form-group">
         <label for="exampleInputEmail1">Brand Name</label>
         <select class="form-control" name="brand_id">
            <option value=''>- Pilih -</option>
            <?php foreach ($cetakbrand as $value): ?>
            <option value="<?= $value['brand_id']; ?>"><?= $value['brand_name']; ?></option>
            <?php endforeach; ?>
         </select>
      </div>
      <div class="form-group">
         <label for="deskripsi_produk">Deskripsi Produk</label>
         <textarea name="produk_description" class="form-control textarea" id="deskripsi_produk" rows="3"></textarea>
      </div>
      <div class="form-group">
         <input class="form-control" type="file" name="tshirt_image" id="exampleInputFile">
         <p class="help-block">SILAHKAN UPLOAD GAMBAR PRODUK </p>
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