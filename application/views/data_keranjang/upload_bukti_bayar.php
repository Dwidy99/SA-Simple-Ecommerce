<div class="banner-bootom-w3-agileits">
   <div class="container">
      <div class="row main">
         <div class="main-login main-center">
            <h5>Silahkan Upload <b>Bukti Pembayaran</b> yang anda Transfer</h5>
            <form action="<?php echo base_url(); ?>Checkout/Simpanbayar" method="post" enctype="multipart/form-data">

               <div class="form-group">
                  <label for="name" class="cols-sm-2 control-label">Nama Pengirim/ Pemilik No Rekening</label>
                  <div class="cols-sm-10">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="input_pengirim" id="name"
                           placeholder="Nama Pengirim" value="<?= $this->session->userdata('username'); ?>" />
                        <?= form_error('input_pengirim', '<small class="text-danger>', '</small>'); ?>

                     </div>

                  </div>
               </div>

               <div class="form-group">
                  <label for="email" class="cols-sm-2 control-label">Nomor Invoice</label>
                  <div class="cols-sm-10">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"
                              aria-hidden="true"></i></span>
                        <input type="number" class="form-control" name="input_invoice" placeholder="No Invoice"
                           value="" />
                        <?= form_error('input_invoice', '<small class="text-danger>', '</small>'); ?>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="password" class="cols-sm-2 control-label">Jumlah Transper</label>
                  <div class="cols-sm-10">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"
                              aria-hidden="true"></i></span>
                        <input type="number" class="form-control" name="input_jumlah" placeholder="Jumlah Transper"
                           value="" />
                     </div>
                     <?= form_error('input_jumlah', '<small class="text-danger>', '</small>'); ?>
                  </div>
               </div>

               <div class="form-group">
                  <label for="confirm" class="cols-sm-2 control-label">Upload Bukti Pembayaran</label>
                  <div class="cols-sm-10">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input class="form-control" type="file" name="input_gambar" id="exampleInputFile">
                        <?= form_error('input_gambar', '<small class="text-danger>', '</small>'); ?>
                     </div>
                  </div>
               </div>

               <div class="form-group ">
                  <input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit"
                     value="simpan">

               </div>

            </form>
         </div>
      </div>
   </div>

</div>