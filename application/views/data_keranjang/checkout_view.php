<div class="page-head_agile_info_w3l">
   <div class="container">
      <h3>Keranjang <span>Belanja</span></h3>
      <!--/w3_short-->
      <div class="services-breadcrumb">
         <div class="agile_inner_breadcrumb">

            <ul class="w3_short">
               <li><a href="index.html">Home</a><i>|</i></li>
               <li>Keranjang Belanja</li>
            </ul>
         </div>
      </div>
      <!--//w3_short-->
   </div>
</div>
<div class="banner-bootom-w3-agileits">
   <div class="container">
      <div class="col-md-5 single-right-left">
         <div class="row">
            <h2
               style="margin-top:10px; text-align: center; border-bottom: 6px solid #cec2c2; width: 471px; margin-bottom:30px; ">
               Detail Pembayaran</h2>

            <form action="<?= base_url('Checkout/simpan_pesanan'); ?>">

               <input type="hidden" name="" id="proivinsi_asal" class="provinsi">
               <input type="hidden" name="" id="kota_asal" class="city">
               <input type="hidden" name="berat" id="berat" value="1" class="form-control">

               <div class="form-group">
                  <div class="alert alert-danger" role="alert">
                     PENTING! - Pastikan data anda sudah benar sebelum menyelesaikan orderan ini.
                  </div>
               </div>
               <div class="form-group">
                  <label>Nama</label>
                  <input type="email" name="name" class="form-control" disabled=""
                     value="<?= $this->session->userdata('name'); ?>">
               </div>
               <div class="form-group">
                  <label>Alamat Email</label>
                  <input type="text" name="email" class="form-control" disabled=""
                     value="<?= $this->session->userdata('email'); ?>">
               </div>
               <div class="form-group">
                  <label>No Telepon</label>
                  <input type="number" name="phone" class="form-control" disabled=""
                     value="<?= $this->session->userdata('phone'); ?>">
                  <?= form_error('phone', '<small class="text-danger">', '</small>'); ?>
               </div>
               <div class="form-group">
                  <label>Provinsi Tujuan</label>
                  <select onchange="get_kota_tujuan()" id="provinsi_tujuan" name="provinsi"
                     class="form-control provinsi" required>

                  </select>
                  <?= form_error('provinsi', '<small class="text-danger">', '</small>'); ?>
               </div>
               <div class="form-group">
                  <label>Kota Tujuan</label>
                  <select id="kota_tujuan" name="kota" class="form-control" required>

                  </select>
                  <?= form_error('kota', '<small class="text-danger">', '</small>'); ?>
               </div>
               <div class="form-group">

                  <input type="hidden" name="berat" id="berat" value="1" class="form-control">
               </div>
               <div class="form-group">
                  <label>Kurir</label>
                  <select onChange="get_ongkir()" name="kurir" id="kurir" name="kurir" id="kurir" class="form-control"
                     required>
                     <option value="">--Pilih--</option>
                     <option value="pos">POS</option>
                     <option value="tiki">TIKI</option>
                  </select>
                  <?= form_error('kurir', '<small class="text-danger">', '</small>'); ?>
               </div>
               <div class="form-group">
                  <label for="service">Service / Harga Ongkir</label>
                  <select name="service" id="service" class="form-control" onChange="get_harga(this)" required>

                  </select>
                  <?= form_error('service', '<small class="text-danger">', '</small>'); ?>
               </div>
               <input type="hidden" name="total">
               <div class="form-group">
                  <button type="submit" class='btn btn-sm btn-primary'>Simpan Pesanan</button>
               </div>
         </div>
      </div>

      <div class="col-md-7 single-right-left " style="margin-top: 40px;">

         <div class="form-group">
            <label for="kodepos">Koda Pos</label>
            <input type="number" name="kodepos" id="kodepos" min="5" class="form-control" placeholder="Kode pos.."
               required>
            <?= form_error('kodepos','<small class="text-danger">','</small>'); ?>
         </div>

         <div class="form-group mb-5">
            <label for="alamat">Alamat Tujuan</label>
            <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10" required></textarea>
            <?= form_error('alamat','<small class="text-danger">','</small>'); ?>
         </div>

         <?php if ($cart = $this->cart->contents()) : ?>
         <?php 
    $grand_total=0;
    $jumlahqty=0;
    $a =1;

    foreach ($cart as $item) :
        $grand_total = $grand_total + $item['subtotal'];
        $jumlahqty = $jumlahqty + $item['qty'];
    ?>

         <ul class="list-group">
            <li class="list-group-item active text-center">Daftar Belanja</li>
            <li class="list-group-item">Total Harga: Rp. <span id="tot_order"><?php echo $grand_total; ?> </span></li>
            <li class="list-group-item">Jumlah Order: <?php echo $jumlahqty; ?></li>
            <li class="list-group-item">Harga Ongkos Kirim: Rp. <span id="harga"></span> </li>
            <li class="list-group-item">Sub Harga: <span id="amount" name="total"></span></li>
         </ul>
         <?php endforeach; ?>

         <?php else : ?>
         <div class="alert alert-info"><strong>DATA BELANJA MASIH KOSONG</strong></div>
         <?php endif; ?>

         </form>
         <style>
         .atas {
            margin-top: 40px;
         }
         </style>
      </div>

   </div>
</div>