<!-- head -->
<?php $this->load->view('depan/componen/head')?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<!-- head -->
<?php $this->load->view('depan/componen/header')?>
<!-- sidebar -->
<?php $this->load->view('depan/componen/sidebar')?>
<!-- endsidebar -->
<div>
<?php $this->load->view('depan/conten/corona')?>
</div>

<style>
            .blog{
                padding-top: 20px;
                padding-bottom: 40px;
            }
        </style>					
<section class="blog spad">
        <div class="container">
        <div id="mapid" style="height: 500px;"></div>
        </div>
    </section>

    <script>
    
    var mymap = L.map('mapid').setView([-1.175643, 116.589173], 5);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		
	}).addTo(mymap);

    <?php foreach($maps['features'] as $key => $value):?>
        L.marker([<?= $value['geometry']['y']?>,<?= $value['geometry']['x']?>]).addTo(mymap).bindPopup("<b><?= $value['attributes']['Provinsi']?></b><br />kasus positif :<?= $value['attributes']['Kasus_Posi']?>").openPopup();;

        L.circle([<?= $value['geometry']['y']?>,<?= $value['geometry']['x']?>], 1000, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap)
    <?php endforeach;?>
		
    </script>

    <?php $this->load->view('depan/componen/footer')?>
