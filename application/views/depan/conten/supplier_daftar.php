

<?php $this->load->view('depan/componen/head') ?>

<?php $this->load->view('depan/componen/humber') ?>



<?php $this->load->view('depan/componen/header') ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar Supplier</title>
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
    <a href="#"><b>Daftar</b> | Supplier</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"></p>
    <?php if ($this->session->flashdata('gagal')): ?>
											<div class="alert alert-danger" role="alert">
												<?php echo $this->session->flashdata('gagal'); ?>
											</div>
											<?php endif; ?>
    <?= form_open('supplier_daftar/aksi')?>
      <div class="form-group has-feedback ">
	  <label for="">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?= set_value('nama')?>"  required>
       
      </div>
	  <div class="form-group has-feedback ">
	  <label for="">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Masukan Username" value="<?= set_value('username')?>" required>
       
      </div>
			<div class="form-group has-feedback ">
			<label for="">Alamat</label>
        <textarea type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" ></textarea>
       
      </div>
      <div class="form-group has-feedback ">
			<style>
    
			.wrapper{
width:200px;
padding:20px;
height: 150px;
}  .wrapper{
   
    height: 200px;
    overflow-x: hidden;
    overflow-y: scroll;
		width:300px;
   
 }
 .wrapper .selection{
  
   border:1px solid #ccc
 }
    
  </style>
	   
   
 
					<div class="form-group has-feedback ">
	  <label for="">Desa</label>
		<div class="wrapper">
										<select  class="form-control" name="id_desa"  class="selection" >
                      <option value="">--Pilih--</option>
                      <?php foreach($desa as $k):?>
											
                        <option  value="<?= $k->id_desa?>"><?= $k->nama_desa ?></option>
                       
                      
                     
                           
												   <?php endforeach;?>
											
												</select>
      </div>
			</div>
			</div>
	  <div class="form-group has-feedback ">
	  <label for="">Nomor Telepon</label>
        <input type="number" name="kontak" class="form-control" placeholder="08" value="<?= set_value('kontak')?>" required>
        <small class="text-danger"><?= form_error('email')?></small>
       
      </div>
	  <div class="form-group has-feedback ">
	  <label for="">Email</label>
        <input type="email" name="email" class="form-control" placeholder="@gmail.com" required>
        <small class="text-danger"><?= form_error('email')?></small>
      </div>
	  <div class="form-group has-feedback ">
	  <label for="">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" >
       
      </div>
	  
	  </div>
        <div class="col-xs-5">
          <button type="submit"  class="btn btn-primary btn-lg" >Dafar</button>
        
        </div>
		
			<?php echo form_close(); ?>
   
			</div>
</div>

  

<?php $this->load->view('depan/componen/footer') ?>


</body>
</html>
