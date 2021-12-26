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
      <div class="col-md-8 single-right-left ">
         <h2>Daftar Belanja</h2>
         <form action="<?= base_url('home/ubah_belanja') ?>" method="post" name="frmShopping" id="frmShopping"
            class="form-horizontal" enctype="multipart/form-data">
            <?php if ($cart = $this->cart->contents()) : ?>

            <table class="table">
               <thead>
                  <tr>
                     <th scope="col">No</th>
                     <th scope="col">Gambar Produk</th>
                     <th scope="col">Nama Produk</th>
                     <th scope="col">Harga Satuan</th>
                     <th scope="col">Qty</th>
                     <th scope="col">Jumlah</th>
                     <th scope="col">Hapus</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                  $grand_total = 0;
                  $jumlah_qty = 0;
                  $i=1;
                  foreach ($cart as $item) :
                     $grand_total = $grand_total + $item['subtotal'];
                     $jumlah_qty = $jumlah_qty + $item['qty'];
               ?>

                  <input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]"
                     value="<?php echo $item['rowid'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][name]"
                     value="<?php echo $item['name'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][price]"
                     value="<?php echo $item['price'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][tshirt_image]"
                     value="<?php echo $item['img'];?>" />
                  <input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />

                  <th scope="row"><?php echo $i++; ?></th>
                  <style>
                  .ukurangambar {
                     width: 80px;
                     height: 60px;
                  }

                  .sizeinput {
                     width: 60px;
                  }
                  </style>
                  <td>
                     <img src="<?= base_url('assets/images/'. $item['img']); ?>" alt="<?= $item['name']; ?>"
                        class="img-responsive ukurangambar">
                  </td>
                  <td><?= $item['name']; ?></td>
                  <td>Rp. <?= number_format($item['price'], 0, ",", "."); ?></td>
                  <td><input type="number" min="1" max="10" class="form-control input-sm sizeinput"
                        name="cart[<?= $item['id'] ?>][qty]" value="<?= $item['qty'] ?>" /></td>
                  <td>Rp. <?= number_format($item['subtotal'], 0, ",", "."); ?></td>
                  <td><a href="<?= base_url('home/hapusdatabelanja/'.$item['rowid']); ?>"
                        class="btn btn-sm btn-danger hapus-databelanja"><i class="glyphicon glyphicon-remove"></i></a>
                  </td>
                  </tr>
                  <tr>
                     <?php endforeach; ?>

                     <td colspan="4">

                        <a class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg"
                           class='btn btn-sm btn-danger'>Kosongkan Cart</a>
                        <button class='btn btn-sm btn-success' type="submit">Update Cart</button>
                        <a href="<?= base_url('checkout/checkoutfunction'); ?>" class='btn btn-sm btn-primary' type="submit">Checkout</a>


                     </td>
                     <td colspan="4" align=""><b>Total Harga: Rp <?php echo number_format($grand_total, 0, ",", ".") ?>
                           &nbsp;
                        </b>Jumlah Order: <?= $jumlah_qty; ?></td>
                  </tr>
               </tbody>
            </table>
         </form>
         <style>
         .atas {
            margin-top: 40px;
         }
         </style>
         <?php else : ?>
         <div class="alert alert-danger">
            <b>Keranjang Belanja Anda Masih Kosong!</b>
         </div>
         <?php endif; ?>
      </div>
      <div class="col-md-4 single-right-left">
         <div class="row">
            <h4 style="margin-top:10px; text-align: center; ">Dukungan Pengiriman Barang</h4>
            <img style="width: 350px; height: 200px; margin-top:30px; margin-left:10px; " class="img-thumbnail"
               src="<?php echo base_url(); ?>assets/images/logo-pengiriman.jpg">
         </div>
      </div>
   </div>
</div>
<!-- model kosongkan belanja -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
   <div class="modal-dialog modal-lg" role="document">
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" action="<?php echo base_url()?>Home/hapusdatabelanja/semua">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
               <h4>Anda yakin mau mengosongkan Shopping Cart?</h4>

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
               <button type="submit" class="btn btn-sm btn-default">Ya</button>
            </div>

         </form>
      </div>

   </div>
</div>
<!--End Modal-->