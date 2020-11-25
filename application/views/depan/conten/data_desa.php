<!-- head -->
<?php $this->load->view('depan/componen/head')?>
<?php $this->load->view('depan/componen/header')?>
<?php $this->load->view('depan/componen/sidebar')?>
<!-- head -->

<!-- sidebar -->

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<script src="<?= base_url('assets/Chart.js') ?>"></script>
<script rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>



<div class="container">

<h3>
  Jumlah desa yang terdaftar<hr>
</h3>

<?php echo form_open('Data_supplier/cari') ?>
<div class="col-md-6">
  <div class="row">
    <div class="col-sm">
	<input type="text" class="form-control" name="keyword" placeholder="Cari Nama User">
    </div>
    <div class="col-sm">
	<input type="submit" class="btn btn-primary" class="btn" name="search_submit" value="Cari">
    </div>
    
  </div>
</div>
<?php echo form_close() ?>
<br>
    <table class="table ">
        <thead class="thead-dark">

            <th scope="col">No</th>
            <th scope="col">Nama Desa</th>
			<th scope="col">Nama Kecamatan</th>
			<th scope="col">Nama Kabupaten</th>
          
        </thead>
        <tbody>

			<?php 
			$no = $this->uri->segment('3') + 1;
			foreach($sup as $s):?>
           <td><?php echo $no++; ?></td>
           <td><?php echo $s->nama_desa ?></td>
		   <td><?php echo $s->nama_kec ?></td>
		   <td><?php echo $s->nama ?></td>


        </tbody>
		<?php endforeach;?>
    </table>

	<div class="ml-4">
    <nav aria-label="Page navigation">
        <?php 
	echo $this->pagination->create_links();

    ?>
	</nav>
	
	</div>
			</div>
<div class="container">
    <div class="row">
        <div class="col-sm">
		<h2>Total Terdaftar : <b><?= $total?> <i>Desa</i></b></h2>
        </div>

      
    </div>
</div><BR>







<?php $this->load->view('depan/componen/footer')?>
