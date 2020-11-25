<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Data pesanan</h4>
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
                            <th>Nama</th>
							<th>Barang</th>

                            <th>Jumlah</th>
                            <th>Tanggal Pesan</th>
                            <th>Tottal</th>
                            <th>Aksi</th>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
							<th>Barang</th>

                            <th>jumlah</th>
                            <th>Tanggal pesan</th>
                            <th>Tottal</th>
                            <th>Aksi</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($pesanan as $b):?>
                        <tr>
                            <td><?= $b->user?></td>
                       
                            <td><?=$b->nama_barang?></td>
                           
                            <td><?=$b->qty?></td>
                            <td><?=$b->tgl_pesan?></td>
                            <td>Rp. <?= number_format($b->total)?></td>
                            <td width="">
                                <a href="<?php echo site_url('Pesanan/edit/'.$b->id_order) ?>"
                                    class="btn btn-smal250l"><i class="fas fa-edit"></i>tinjau</a>
                            </td>


                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
