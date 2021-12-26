<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div class="banner-bootom-w3-agileits">

   <section class="content content_content" style="width: 70%; margin: auto;">
      <?php foreach ($data_pembayaran as $data) : ?>
      <section class="invoice">
         <!-- title row -->
         <div class="row">
            <div class="col-xs-12">
               <h2 class="page-header">
                  <i class="fa fa-globe"></i>BABASTUDIO.
                  <small class="pull-right">Date: <?php echo $data['tgl_pesan']; ?></small>
               </h2>
            </div><!-- /.col -->
         </div>
         <!-- info row -->
         <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
               From
               <address>
                  <strong>
                     TOKOQU
                  </strong>
               </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
               To
               <address>
                  <strong>
                     <?= $data['customer_username']; ?>
                  </strong>


            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
               <b>Invoice: TOKOQU/<?= $data['pesanan_id']; ?></b><br>
               <br>
               <b>Order ID:</b>#<?= $data['pesanan_id']; ?><br>

            </div><!-- /.col -->
         </div><!-- /.row -->

         <!-- Table row -->
         <div class="row">
            <div class="col-xs-12 table-responsive">
               <table class="table table-striped">
                  <thead>
                     <tr>
                        <th>Total Belanja</th>
                        <th>Nama Produk</th>
                        <th>Tanggal Pesanan</th>
                        <th>Batas Pembayaran</th>
                     </tr>
                  </thead>
                  <tbody>


                     <tr>
                        <td><?= number_format($data['total'], 2, ", ", "."); ?></td>
                        <td><?= $data['tshirt_name']; ?></td>
                        <td><?= $data['tgl_pesan']; ?></td>
                        <td><?= $data['bts_bayar']; ?></td>
                     </tr>
                  </tbody>
               </table>
            </div><!-- /.col -->
         </div><!-- /.row -->

         <div class="row">
            <!-- accepted payments column -->
            <div class="col-md-12">
               <p class="lead">Untuk Pembayaran silahkan Transfer Ke Rekening di bawah ini:</p>
               <div class="table-responsive">
                  <table class="table">
                     <tbody>


                        <tr>
                           <th>BCA: 0871232112</th>
                           <td>BNI: 99823</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div><!-- /.col -->
         </div><!-- /.row -->

         <!-- this row will not appear when printing -->
         <div class="row no-print">
            <div class="col-xs-12">
               <a href="" class="btn btn-success"><i class="glyphicon glyphicon-print"></i> Print</a>

            </div>
         </div>
      </section>
      <?php endforeach; ?>
   </section>

   <script>
   window.print();
   </script>