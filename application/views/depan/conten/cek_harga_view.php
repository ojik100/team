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
Cek Harga Sembako<hr>
	
</h3><?php echo form_open('Harga/cari') ?>
<div class="col-md-6">
  <div class="row">
    <div class="col-sm">
	<input type="text" class="form-control" name="keyword" placeholder="Cari Barang">
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
            <th scope="col">Barang</th>
			<th scope="col"><b>Harga</b></th>
			<th scope="col">Keterangan</th>
          
        </thead>
        <tbody>

			<?php 
			$no =  + 1;
			foreach($harga as $s):?>
           <td><?php echo $no++; ?></td>
           <td><?php echo $s->nama_barang ?></td>
		   <td><b>Rp.<?php echo $s->harga ?></b></td>
		   <td><?php echo $s->keterangan ?></td>


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
		
        </div>

      
    </div>
</div><BR>







<?php $this->load->view('depan/componen/footer')?>
