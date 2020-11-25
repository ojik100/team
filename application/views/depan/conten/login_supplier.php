

<?php $this->load->view('depan/componen/head') ?>

<?php $this->load->view('depan/componen/humber') ?>



<?php $this->load->view('depan/componen/header') ?>



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

   
    <?= form_open('L_supplier/aksi_login')?>
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
          <button type="submit" class="btn btn-primary btn-lg">Masuk</button>
        </div>
        <!-- /.col -->
			
      </div>

			<center><p>Belum mempunyai akun ?</p></center>
			<center><a href="<?= base_url('supplier_daftar')  ?>">Daftar</a></center>
      
    </form>

  
    <!-- /.social-auth-links -->

    
  </div>
</div>
  
</body>
</html>

<?php $this->load->view('depan/componen/footer')?>
