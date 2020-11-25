<div class="container">
	<div class="col-md-12"><br>
		<h2>edit Info</h2>
		<?php if ($this->session->flashdata('success')): ?>
											<div class="alert alert-success" role="alert">
												<?php echo $this->session->flashdata('success'); ?>
											</div>
											<?php endif; ?>
												<?php echo validation_errors(); ?>
										<form action="" method="post" enctype="multipart/form-data" >

			<div>
			<input type="hidden"   class="form-control" value="<?php echo date("Y-m-d")?>" name="tgl" id="tgl">
			<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">					
			</div>
		
				<div>
										
			<input type="text"  class="form-control" name="time" value="<?php echo date('y-m-d  h:i:s');?>" >
			</div>
		
										<div>
			<label for=""><B>Judul</B></label>
			<input type="text" class="form-control" name="judul" value="<?= $desa->judul?>">
			</div>
		
			<div>
			<label for=""><b>Gambar</b></label>
            <input type="file" class="form-control" name="gambar" id="gambar" placeholder="biarkan kosong jika tidak di ganti">
            <input type="hidden" class="form-control" name="old_gambar" value="<?= $desa->gambar?>">
		
			</div>
			<div>
			<label for=""><B>Berita</B></label>
			<textarea name="berita" id="ckeditor" class="form-control" cols="30" rows="10"><?= $desa->berita?></textarea>
			</div><br>
			
			<input type="hidden"  class="form-control" name="id_desa" value="<?= $this->session->userdata('id_desa')?>">
            <input type="hidden"  class="form-control" name="id" value="<?= $desa->id_info?>">
		
			
			</div><br>
			
			
			<button class="btn btn-primary">Kirim</button>
		</form>
    </div>
</div>
</div><BR>
<script src="<?php echo base_url('assets/admin/js/jquery-3.3.1.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/js/bootstrap.bundle.js');?>"></script>
	<script src="<?php echo base_url('assets/admin/ckeditor/ckeditor.js');?>"></script>
	<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'ckeditor' );
            </script>
