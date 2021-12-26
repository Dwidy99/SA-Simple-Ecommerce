<div class="row">
  <div class="col-md-6">
    <form action="<?= base_url('AdminData/index'); ?>" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" value="<?= $adminData['username']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" value="<?= $adminData['nama']; ?>" placeholder="Nama..">
        <?php echo form_error('nama', '<small class="text-danger">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control"><?= $adminData['alamat']; ?></textarea>
        <?php echo form_error('alamat', '<small class="text-danger">', '</small>'); ?>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>