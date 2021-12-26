<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/style/style.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container">
    <div class="card card-container">

        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="<?php echo base_url(); ?>AdminLogin/loginSubmit" method="post">
            <span id="reauth-email" class="reauth-email"></span>
            <label for="login">Username:</label>
            <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
            <label for="pass">Password:</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <?php echo validation_errors(); ?><?php if (isset($loginerror)) { ?><?php echo $loginerror; ?><?php } ?>
            <input type="submit" class="btn btn-lg btn-primary btn-block btn-signin" value="Login">

        </form><!-- /form -->
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
    </div><!-- /card-container -->
    </div><!-- /container -->
<?php if ($this->session->flashdata('flash')) : ?>
 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php endif; ?>

<script src="<?= base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/dataflash.js'); ?>"></script>