
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<?php $this->load->view('web/template/navbar') ?>
<body class="">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b> | User</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"></p>

    <form action="<?= base_url('L_user/aksi_login') ?>" method="post">
      <div class="form-group has-feedback ">
        <input type="text" name="nik" class="form-control" placeholder="NIK">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
     
      <div class="row">
        <div class="col-mt--6">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          <button type="submit"  class="btn btn-success btn-lg" >Sign In</button>
        
        </div>
       
          
       
        <!-- /.col -->
      </div>
    </form>

  
    <!-- /.social-auth-links -->

    
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
</form>

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
  

</body>
</html>
