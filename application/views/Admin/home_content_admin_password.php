<div class="row">
  <div class="col-md-6">
    <form action="<?= base_url('AdminData/password'); ?>" method="post">
      <div class="form-group">
        <label for="password_lama">Password Lama</label>
        <input type="password" name="password_lama" id="password_lama" class="form-control" placeholder="Pasword lama..">
        <?= form_error('password_lama', '<small class="text-danger">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="password_baru">Password Baru</label>
        <input type="password" name="password_baru" id="password_baru" class="form-control" placeholder="Pasword baru..">
        <?= form_error('password_baru', '<small class="text-danger">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="konfirmasi_password">Konfirmasi Password Baru</label>
        <input type="password" name="konfirmasi_password" id="konfirmasi_password" class="form-control" placeholder="Konfirmasi password baru..">
        <?= form_error('konfirmasi_password', '<small class="text-danger">', '</small>'); ?>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>