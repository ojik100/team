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
                        <div class="card-title">Form Tambah Kurir</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="container">
							
							<?php echo validation_errors(); ?>
                                <?php echo form_open('kurir/aksi_tambah');   ?>
								
                                <div class="col-md-12 offset-md-2 col-lg-8 ">
                                    <div class="form-group">
                                        <label for="">NIK</label>
                                        <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Kelamin</label>
                                        <select name="jk" id="jk" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="">Laki-Laki</option>
                                            <option value="">Perempuan</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Umur</label>
                                        <input type="text" name="umur" class="form-control" id="umur" placeholder="Umur">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"
                                            placeholder="Alamat"></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="">Desa</label>
                                        <input type="text" name="desa" class="form-control" id="desa" placeholder="Desa">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Telpon</label>
                                        <input type="text" name="telpon" class="form-control" id="telpon"
                                            placeholder="Telpon">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" name="password" class="form-control" id="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" id="kecamatan"
                                            placeholder="Kecamatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kabupaten</label>
                                        <input type="text" name="kabupaten" class="form-control" id="kabupaten"
                                            placeholder="Kabupaten">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status Nikah</label>
                                        <select name="status_nikah" id="" class="form-control">
                                            <option value="">Pilih</option>
                                            <option value="">Nikah</option>
                                            <option value="">Belum Nikah</option>
                                        </select>
										 </div>
                                    <div class="form-group">
                                        <label for="">Poto</label>
                                        <input type="file" name="photo" class="form-control" id="photo" placeholder="Poto">
                                    </div>
									<div class="form-group">
                                      
                                        <input type="hidden" name="verified" class="form-control" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="col-md-3 offset-2">
                                <button class="btn btn-success">Simpan</button>
                                <button class="btn btn-danger">Batal</button>
                            </div>

                        </div>
						<?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
