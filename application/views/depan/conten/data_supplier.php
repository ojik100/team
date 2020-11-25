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
  Jumlah supplier yang terdaftar<hr>
</h3>
<?php echo form_open('Data_supplier/cari') ?>
<div class="col-md-6">
  <div class="row">
    <div class="col-sm">
	<input type="text" class="form-control" name="keyword" placeholder="Cari Nama Supplier">
    </div>
    <div class="col-sm">
	<input type="submit" class="btn btn-primary" class="btn" name="search_submit" value="Cari">
    </div>
    
  </div>
</div>
<?php echo form_close() ?>


<BR>
    <table class="table ">
        <thead class="thead-dark">

            <th scope="col">No</th>
            <th scope="col">Nama Supplier</th>
			<th scope="col">Alamat Supplier</th>
		
        </thead>
        <tbody>

			<?php 
			$no = $this->uri->segment('3') + 1;
			foreach($sup as $s):?>
           <td><?php echo $no++; ?></td>
           <td><?php echo $s->nama ?></td>
<td><?php echo $s->alamat ?></td>
        

        </tbody>
		<?php endforeach;?>
    </table>

	<div class="ml-4">
    <nav aria-label="page navigation">
        <?php 
	echo $this->pagination->create_links();

    ?>
	</nav>
	
	</div>
			</div>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h2>Total Terdaftar : <b><?= $total?> <i>Supplier</i></b></h2>
        </div>

       
    </div>
</div><BR>







<?php $this->load->view('depan/componen/footer')?>
