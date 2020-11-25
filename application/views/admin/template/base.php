<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>HamzanwadiFood</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url('assets')?>/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= base_url()?>assets/admin/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= base_url()?>assets/admin/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url()?>assets/dist/sweetalert.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/elap2.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/elap.css">
	<script src="<?= base_url()?>assets/dist/sweetalert.min.js"></script>
	<script src="<?= base_url()?>assets/dist/sweetalert-dev"></script>


	
<!-- mapps -->
<script src="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.9.0/mapbox-gl.css" rel="stylesheet" />


<!-- masppp -->

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="green">
				
				<a href="<?= base_url()?>dashboard/home" class="logo">
					<img height="48px" width="72px" src="<?= base_url()?>assets/lades.png" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="green">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= base_url()?>assets/admin/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?= base_url()?>assets/admin/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h3><?php echo $this->session->userdata("nama"); ?></h3>
												
														</div>
										</div>
									</li>
									<li>
										<!-- <div class="dropdown-divider"></div> -->
									
										<!-- <a class="dropdown-item" href="#">Account Setting</a> -->
										<div class="dropdown-divider"></div>
										<!--<a class="dropdown-item" href="<?= base_url() ?>Akun">Akun</a>-->
										<a class="dropdown-item" href="<?= base_url() ?>login/logout">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url()?>assets/admin/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
								<b><?php echo $this->session->userdata("nama"); ?></b>
								<?php if($this->session->userdata('level')== 1){?>
									<span class="user-level">Administrator</span>
								<?php }else if( $this->session->userdata('level')== 4 ){?>
									<span class="user-level">superadmin</span>

								<?php }else if($this->session->userdata('level')== 5 ){?>
										<span class="user-level">Bumdes</span>
								<?php }else if($this->session->userdata('level')== 2 ){?>
									<span class="user-level">suplayer</span>
									
								<?php }?>
								</span>
							</a>
							

						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							
						</li>
						<ul class="nav nav-primary">
						<li class="nav-item active">
							
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa--h"></i>
							</span>
							<h4 class="text-section">Home</h4>

						</li>
						
						<li class="nav-item">
							<a href="<?= base_url()?>dashboard/home">
								<i class="fas fa-home"></i>
								<p>Home</p>
								
							</a>
						</li>
					
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-th-list"></i>
								<p>Barang</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
								<?php if($this->session->userdata('level')== 2){?>
							
									

									<?php }else{?>
										<li>
										<a href="<?= base_url()?>Kategori">
											<span class="sub-item">Tambah Kategori</span>
										</a>
									</li>
									<?php }?>
									<li>
										<a href="<?= base_url()?>Barang">
											<span class="sub-item">Lihat Data</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url()?>Barang/create">
											<span class="sub-item">Tambah</span>
										</a>
									</li>
									
								
								</ul>
							</div>
						</li>

						<?php if($this->session->userdata('level')==2){?>

						<?php }else if($this->session->userdata('level')==1 || $this->session->userdata('level')==4 ){?>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-users"></i>
								<p>Supplier</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url() ?>supplier/create">
											<span class="sub-item">Tambah Data</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url() ?>supplier/index">
											<span class="sub-item">Lihat Data</span>
										</a>
									</li>
									<li>
								
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#tables">
								<i class="fas fa-users"></i>
								<p>User</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="tables">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url() ?>user/create">
											<span class="sub-item">Tambah User</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url() ?>user/index">
											<span class="sub-item">Lihat Data</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
						<li class="nav-item">
							<a data-toggle="collapse" href="#bantuan">
								<i class="fas fa-address-book"></i>
								<p>Bantuan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="bantuan">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url() ?>Penerima">
											<span class="sub-item">Data Bantuan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('Maps')?>">
								<i class="fas fa-map"></i>
								<p>Lacak supllier</p>
								
							</a>
						</li>
						<?php }?>
						<li class="nav-item">
							<a href="<?= base_url('Pesanan')?>">
								<i class="fas fa-bell"></i>
								<p>Data Pesanan</p>
								
							</a>
						</li>	
						
						<?php if($this->session->userdata('level')==4){?>
							<li class="nav-item">
							<a data-toggle="collapse" href="#charts">
								<i class="fas fa-user"></i>
								<p>Pihak Desa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url() ?>desa/tambah">
											<span class="sub-item">Tambah Data</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url() ?>desa">
											<span class="sub-item">Lihat Data</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
							<?php }else{?>
				

						
				<?php }?>

						<?php if($this->session->userdata('level')==1 || $this->session->userdata('level')==4){?>
							<li class="nav-item">
							<a href="<?= base_url('laporan')?>">
								<i class="fas fa-print"></i>
								<p>Laporan</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#kurir">
								<i class="fas fa-users"></i>
								<p>Data Kurir</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="kurir">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url() ?>kurir/aksi_tambah">
											<span class="sub-item">Tambah Data</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url() ?>kurir">
											<span class="sub-item">Lihat Data</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

<?php }else{?>
				

						
						<?php }?>
						<li class="nav-item">
							<a data-toggle="collapse" href="#info">
								<i class="fas fa-book"></i>
								<p>Info Desa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="info">
								<ul class="nav nav-collapse">
									<?php if($this->session->userdata('level')==2){?>

									<?php }else{?>
													
	

									<li>
										<a href="<?= base_url('info_desa/tambah')?>">
											<span class="sub-item">Tambah Info</span>
										</a>
									</li>
									<?php }?>
									<li>
										<a href="<?= base_url('info_desa/info')?>">
											<span class="sub-item">Lihat Data</span>
										</a>
									</li>
								</ul>
								
							</div>
						</li>
						<?php if($this->session->userdata('level')==2 || $this->session->userdata('level')==1){?>

						<?php }else{?>
						<li class="nav-item">
							<a data-toggle="collapse" href="#admin">
								<i class="fas fa-user"></i>
								<p>Admin Desa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="admin">
								<ul class="nav nav-collapse">
								
									<li>
										<a href="<?= base_url('admin_desa/create')?>">
											<span class="sub-item">Tambah admin</span>
										</a>
									</li>
									
									<li>
										<a href="<?= base_url('admin_desa')?>">
											<span class="sub-item">Lihat Data</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						
						<?php }?>
		
						
						</ul>
						<li class="nav-item">
							<a data-toggle="collapse" href="#barang">
								<i class="far fa-bell"></i>
								<p>Jadwal Pemesanan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="barang">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url() ?>jadwal/tambah">
											<span class="sub-item">Tambah Data</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url() ?>jadwal">
											<span class="sub-item">Lihat Data</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#harga">
								<i class="fas fa-donate"></i>
								<p>Info Harga Sembako</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="harga">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?= base_url() ?>Harga/tambah">
									
											<span class="sub-item">Tambah Harga </span>
										</a>
									</li>
									<li>
										<a href="<?= base_url() ?>harga">
											<span class="sub-item">Lihat Data</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						

						
						
						
						</div>
						
						
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
							
							</div>
							<!-- <div class="ml-md-auto py-2 py-md-0">
								<?php if($this->uri->segment(1)=='Barang'){?>
								<a href="<?= base_url('Barang/create')?>" class="btn btn-white btn-border btn-round mr-2">Tambah barang</a>
								<a href="<?= base_url('Barang/pdf')?>" class="btn btn-danger btn-primary btn-round mr-2">export laporan</a>
								
								<a href="<?= base_url('Barang')?>" class="btn btn-secondary btn-round">Kembali </a>
								<?php }else if($this->uri->segment(1)=='supplier'){?>
								<a href="#" class="btn btn-secondary btn-round">Add supplier</a>
								
								<?php }else if($this->uri->segment(1)=='user'){?>
								<a href="#" class="btn btn-secondary btn-round">Add user</a>
								<?php }else if($this->uri->segment(1)=='Kategori'){?>
									
								<a href="<?= base_url('Kategori/tambah')?>" class="btn btn-secondary btn-round">Add kategori</a>
								<?php }{}?>
							</div> -->
						</div>
					</div>
				</div>
		
                <?php $this->load->view($page) ?>
			</div>
			</div>
		
		
		
			<footer class="footer">
				<div class="">
				
					<div class="copyright ">
					<center> <b>&copy; Copyright 2020 e-Lades</b> </center>

			
							</div>				
				</div>
			</footer>
		</div>
		
	</div>
	<!--   Core JS Files   -->
	<script src="<?= base_url()?>assets/admin/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url()?>assets/admin/js/core/popper.min.js"></script>
	<script src="<?= base_url()?>assets/admin/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url()?>assets/admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url()?>assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url()?>assets/admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="<?= base_url()?>assets/admin/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?= base_url()?>assets/admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?= base_url()?>assets/admin/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?= base_url()?>assets/admin/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= base_url()?>assets/admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= base_url()?>assets/admin/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url()?>assets/admin/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="<?= base_url()?>assets/admin/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="<?= base_url()?>assets/admin/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="<?= base_url()?>assets/admin/js/setting-demo.js"></script>
	<script src="<?= base_url()?>assets/admin/js/food.js"></script>
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: { 
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
		<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>
