<h1>Form Edit</h1>

<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Forms</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Basic Form</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Form Edit Kurir</div>
								</div>
								<div class="card-body">
									<div class="row">
                                        <div class="container">
										
										<?php echo form_open('kurir/edit') ?>
                                    	 <div class="col-md-12 offset-md-2 col-lg-8 ">
                                           
											<div class="form-group">
												<label for="">NIK</label>
											
												<input type="text" name="nik" class="form-control" id="" placeholder="NIK" value="<?php echo $kurir->nik?>">
												<input type="hidden" name="id_kurir" value="<?php echo $kurir->id_kurir?>">
											
										</div>
										<div class="form-group">
												<label for="">Nama Lengkap</label>
												<input type="text" name="nama" class="form-control" id="" placeholder="Nama Lengkap" value="<?php echo $kurir->nama?>">
										</div>
										<div class="form-group">
											<label for="">Jenis Kelamin</label>
											<select name="jk" id="" class="form-control" value="<?php echo $kurir->jk?>">
											<option value="">Pilih</option>
											<option value="">Laki-Laki</option>
											<option value="">Perempuan</option>
											</select>

										</div>
										<div class="form-group">
												<label for="">Umur</label>
												<input type="text" name="umur" class="form-control" id="" placeholder="Umur" value="<?php echo $kurir->umur?>">
										</div>
										<div class="form-group">
												<label for="">Alamat</label>
												<textarea name="alamat" class="form-control" id="" cols="30" rows="10" placeholder="Alamat"><?php echo $kurir->alamat?></textarea>
													
                                        </div>
										<div class="form-group">
												<label for="">Desa</label>
												<input type="text" name="desa" class="form-control" id="" placeholder="Desa" value="<?php echo $kurir->desa?>">
										</div>
										<div class="form-group">
												<label for="">Telepon</label>
												<input type="text" name="telpon" class="form-control" id="" placeholder="Telpon" value="<?php echo $kurir->telpon?>">
										</div>
										<div class="form-group">
												<label for="">Email</label>
												<input type="text" name="email" class="form-control" id="" placeholder="Email" value="<?php echo $kurir->email?>">
										</div>
										<div class="form-group">
												<label for="">Password</label>
												<input type="text" name="password" class="form-control" id="" placeholder="Password" value="<?php echo $kurir->password?>">
										</div>
										<div class="form-group">
												<label for="">Kecamatan</label>
												<input type="text" name="kecamatan" class="form-control" id="" placeholder="Kecamatan" value="<?php echo $kurir->kecamatan?>">
										</div>
										<div class="form-group">
												<label for="">Kabupaten</label>
												<input type="text" name="kabupaten" class="form-control" id="" placeholder="Kabupaten" value="<?php echo $kurir->kabupaten?>">
										</div>
										<div class="form-group">
												<label for="">Status Nikah</label>
												<select name="status_nikah" id="" class="form-control" value="<?php echo $kurir->status_nikah?>">
											<option value="">Pilih</option>
											<option value="">Nikah</option>
											<option value="">Belum Nikah</option>
											</select>	</div>
										<div class="form-group">
												<label for="">Poto</label>
												<input type="file" name="photo" class="form-control" id="" placeholder="Poto" value="<?php echo $kurir->photo?>">
										</div>
										</div>
									</div>
								</div>
								<div class="card-action">
                                    <div class="col-md-3 offset-2">
                                    <button class="btn btn-success">Ubah</button>
									<button class="btn btn-danger">Batal</button>
                                    </div>
									
                                </div>
                            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
