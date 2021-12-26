 <div class="page-head_agile_info_w3l">
    <div class="container">
      <h3>Berbelanja ditoko kami <span>Aman dan banyak diskon</span></h3>
      <!--/w3_short-->
         <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">

              <ul class="w3_short">
                <li><a href="index.html">Home</a><i>|</i></li>
                <li>Registrasi</li>
              </ul>
             </div>
        </div>
     <!--//w3_short-->
  </div>
</div>

<div class="banner-bootom-w3-agileits">
  <div class="container">
      <div class="col-md-6 single-right-left ">
          <style>
            .gambar_regis{width: 90%; height:532px; margin-top:50px;  }
            .merah {
              color: red;
            }
          </style>
          <div class="pembungkus_gambar ">          
              <img src="<?php echo base_url() ?>assets/images/gambarregis.png" class="gambar_regis img-thumbnail">
          </div>
          
      </div>
    <div class="col-md-5 single-right-left">
      <div class="row">
          <h2 class="text-center"><u>Ubah Data Anda</u></h2>
          <form class="form-horizontal" action="<?php echo base_url()?>auth/ubahProfil" method="post" name="frmCO" id="frmCO">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="<?= $get_session['customer_name']; ?>">
           <?= form_error('nama', '<div class="merah">', '</div>'); ?>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" placeholder="Masukan Email anda" value="<?= $get_session['customer_email']; ?>" readonly>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">No Telepon</label>
            <input type="tel" class="form-control" id="telepon" placeholder="Masukan No hp anda" name="telepon" value="<?= $get_session['customer_phone']; ?>">
            <?= form_error('telepon', '<div class="merah">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat.."><?= $get_session['customer_address']; ?></textarea>
            <?= form_error('alamat', '<div class="merah">', '</div>'); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Provinsi</label>
            <select class="form-control" name="provinsi">
             <option value=''>- Pilih -</option>
              <?php foreach ($ambilprov as $prov) : ?>
                <?php if($prov['nama_propinsi'] == $get_session['provinsi']) : ?>
                <option value="<?php echo $prov['nama_propinsi']; ?>" selected><?php echo $prov['nama_propinsi']; ?></option>
                <?php else : ?>
                <option value="<?php echo $prov['nama_propinsi']; ?>"><?php echo $prov['nama_propinsi']; ?></option>
              <?php endif; ?>
              <?php endforeach; ?>

           </select>
           <?= form_error('provinsi', '<div class="merah">', '</div>'); ?>
         </div>
         <div class="form-group">
          <label for="exampleInputPassword1">Username</label>
          <input type="text" class="form-control" value="<?= $get_session['customer_username']; ?>" readonly>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password Baru</label>
          <input type="password" class="form-control"  name="password1" id="exampleInputPassword1" placeholder="Password baru..">
          <?= form_error('password1', '<div class="merah">', '</div>'); ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Konfirmasi Password</label>
          <input type="password" class="form-control"  name="password2" id="exampleInputPassword1" placeholder="Konfirmasi Password">
          <?= form_error('password2', '<div class="merah">', '</div>'); ?>
        </div>
        <h4>
          NOTES: <small>** kosongkan jika tidak ingin mengganti password</small>
        </h4><br>
        <style>.nilai{background-color:#22e1d3 !important;}</style>
        <input type="submit" class="btn btn-primary nilai"  name="submit" value="simpan">
      </form>
      </div>
    </div>
  </div>
</div>
z