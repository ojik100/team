<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Data Bantuan</h4>
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
                <a href="#">Tables</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Datatables</a>
            </li>
        </ul>
    </div>
	<?php echo $this->session->flashdata('notif') ?>
    <div>
	<div class="container">
	<?= form_open(base_url('Penerima/index'), 'enctype="multipart/form-data"') ?>
  <div class="row">
    <div class="col-sm">
	<input type="hidden" name="hidden_value" value="1">
            <input type="file" name="excel_file" class="form-control"><br>
    </div>
    <div class="col-sm">
	<?= form_error('excel_file', '<span style="color: red">', '</span><br>'); ?>
            <button type="submit" class="btn btn-primary ">Upload</button>
    </div>
  </div>
        <?= form_close() ?></div>
    <br>
</div>

<div class="col-md-12 mt--4">
    <div class="card">

        <div class="card-body">
            <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                     
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Desa</th>
                            <th>Aksi</th>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($penerima as $b) : ?>

                        <tr>
                          
                            <td><?= $b->nik ?></td>
							<td><?= $b->nama ?></td>
							<td><?= $b->desa ?></td>

		                            <td>
									<a href="<?php echo site_url('jadwal/hapus/'.$b->id_penerima) ?>"
											 class="btn btn-small text-danger"><i class="fas fa-recycle"></i> Hapus</a>
									

                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 