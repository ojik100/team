

<?php $this->load->view('depan/componen/head') ?>

<?php $this->load->view('depan/componen/humber') ?>



<?php $this->load->view('depan/componen/header') ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar User</title>
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
    <a href="#"><b>Daftar</b> | User</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"></p>
    <?= form_open('user_daftar/aksi')?>
      <div class="form-group has-feedback ">
	  <label for="">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" >
       
      </div>
	  <div class="form-group has-feedback ">
	  <label for="">Username</label>
        <input type="text" name="nik" class="form-control" placeholder="Masukan Username" >
       
      </div>
			<div class="form-group has-feedback ">
			<label for="">Alamat</label>
        <textarea type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" ></textarea>
       
      </div>
	  <div class="form-group has-feedback ">
	  <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" placeholder="" >
       
      </div>
	  <div class="form-group has-feedback ">
	  <label for="">Jenis Kelamin</label>
      <select name="jk" class="form-control" id="">
	  	<option value="">Pilih</option>
		  <option value="L">Laki-Laki</option>
		  <option value="P">Perempuan</option>
	  </select> 
      </div>
			<style>
    
		.wrapper{
width:200px;
padding:20px;
height: 150px;
}  .wrapper{
 
	height: 150px;
	overflow-x: hidden;
	overflow-y: scroll;
	width:300px;
 
}
.wrapper .selection{

 border:1px solid #ccc
}
	
</style>
      <div class="form-group has-feedback ">
			
	  <label >Kecamatan :</label>
		<div class="wrapper">
												<select class="form-control" name="kecamatan"  class="selection">
												<option value="">--Pilih--</option>
												<?php foreach($kecamatan as $k):?>
													
													<option value="<?= $k->nama_kec?>"><?= $k->nama_kec ?></option>
													<?php endforeach;?>
												
												</select>
      </div>
			</div>
	  <div class="form-group has-feedback ">
	  <label >Desa :</label>
		<div class="wrapper">
												<select class="form-control" name="desa" class="selection">
												<option value="">--Pilih--</option>
												<?php foreach($desa as $k):?>
													
													<option value="<?= $k->nama_desa?>"><?= $k->nama_desa ?></option>
													<?php endforeach;?>
												
												</select>
      </div>
	    </div>
	  <div class="form-group has-feedback ">
	  <label for="">Status Nikah</label>
        <select name="status_nikah" class="form-control" id="">
		<option value="">Pilih</option>
		<option value="">Nikah</option>
		<option value="">Belum Nikah</option>
		</select>
      </div>
	  <div class="form-group has-feedback ">
	  <label for="">Nomor Telepon</label>
        <input type="text" name="telpon" class="form-control" placeholder="+62" >
       
      </div>
	  <div class="form-group has-feedback ">
	  <label for="">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="@gmail.com" required>
       
       <small class="text-danger"> <?= form_error('email')?></small>
      </div>
	  <div class="form-group has-feedback ">
	  <label for="">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" >
       
      </div>
	  
	  </div>
        <div class="col-xs-5">
          <button type="submit"  class="btn btn-primary btn-" >Dafar</button>
        
        </div>
			
          
       
        <!-- /.col -->
      </div>

		
       
			<?php echo form_close(); ?>
  
    <!-- /.social-auth-links -->

    
  </div>
  <!-- /.login-box-body -->
</div>
</div>
  
</body>
</html>


	

<?php $this->load->view('depan/componen/footer') ?>
