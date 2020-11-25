<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Kelola Jadwal Pemesanan</h4>
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
</div>

<div class="col-md-12 mt--4">
    <div class="card">

        <div class="card-body">
            <div class="table-responsive">
                <table id="multi-filter-select" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                        <?php if($this->session->userdata('level')== 1 || $this->session->userdata('level')== 4){?>
                            <th>Toko</th>
                            <?php }{?>
                            <?php }?>
                            <th>Jam Pesan</th>
                            <th>Jam Pengepulan</th>
                            <th>Jam Pengiriman</th>
                            <th>Aksi</th>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($jadwal_pesanan as $b) : ?>

                        <tr>
                            <?php if($this->session->userdata('level')== 1 || $this->session->userdata('level')== 4){?>
                            <td><?= $b->nama ?></td>
                            <?php }{?>
                            <?php }?>
                            <td><?= $b->jam_pesan ?></td>
							<td><?= $b->jam_pengepulan ?></td>
							<td><?= $b->jam_pengiriman ?></td>

		                            <td>
									<a href="<?php echo site_url('jadwal/hapus/'.$b->id_pesanan) ?>"
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
