

<?php $this->load->view('web/template/head') ?>

<?php $this->load->view('web/template/navbar') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Supplier</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b> | Supplier</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg"></p>

    <form action="<?= base_url('L_supplier/aksi_login') ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  
    <!-- /.social-auth-links -->

    
  </div>
</div>


  
</body>
</html>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script src="<?= base_url()?>assets/web/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/web/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url()?>assets/web/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/web/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/web/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url()?>assets/web/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url()?>assets/web/js/jquery.stellar.min.js"></script>
<script src="<?= base_url()?>assets/web/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>assets/web/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>assets/web/js/aos.js"></script>
<script src="<?= base_url()?>assets/web/js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url()?>assets/web/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url()?>assets/web/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url()?>assets/web/js/google-map.js"></script>
<script src="<?= base_url()?>assets/web/js/main.js"></script>
