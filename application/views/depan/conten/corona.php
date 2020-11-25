<style type="text/css">
.card-title{
	font-weight: bold;
}
.card-body-icon {
	position: absolute;
	z-index: 0;
	top: 25px;
	right: 4px;

	font-size: 90px;
}
.card-body-icon {
	position: absolute;
	z-index: 0;
	top: 25px;
	right: 4px;

	font-size: 90px;
}
#card0{
	background:#f2336c;
}
#card1{
	background:orange;
}
#card2{
	background:#c358fc;
}
#card3{
	background:#3297a8;
}

		</style>
	<?php

$corona = json_decode(file_get_contents('https://api.kawalcorona.com'));

$positif = $aktif = $meninggal = $sembuh = 0;

$update = [];

foreach ($corona as $data) {
	$update[] = $data->attributes->Last_Update;
	$positif += $data->attributes->Confirmed;
	$aktif += $data->attributes->Active;
	$meninggal += $data->attributes->Deaths;
	$sembuh += $data->attributes->Recovered;

	if ($data->attributes->Country_Region == "Indonesia") {
		$indonesia = [
			"update" => $data->attributes->Last_Update,
			"positif" => $data->attributes->Confirmed,
			"aktif" => $data->attributes->Active,
			"meninggal" => $data->attributes->Deaths,
			"sembuh" => $data->attributes->Recovered
    ];
  }
}

?>
			<div class="fote-selection ">
			<div class="container">
				<!-- <h3><center>Indonesia Covid-19 Global Data</center><hr> </h3> -->
				<div class="row mt-5">
						<div class="col-sm-6 col-md-3">
						<div class="card card-stats card-round " id="card0">
								<div class="card-body "	>
								<div class="card-body-icon">
									
								</div>
									<div class="row align-items-center">

										<div class="col col-stats ml-3 ml-sm-0">
										
												<h4 class="card-title" style="color: white">KASUS </h4>
												<h5 class="card-desplay-4" style="color: white"><?= $indonesia["positif"] ?> Orang</h5>
										</div>
									</div>
								</div>
							</div>
						
						
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round card"  id="card1">
								<div class="card-body">
								<div class="card-body-icon">
								
								</div>
									<div class="row align-items-center">
										
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
												<h4 class="card-title" style="color: white">SUSPECT</h4>
												<h5 class="card-desplay-4" style="color: white"><?= $indonesia["aktif"] ?> orang</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round "  id="card2">
								<div class="card-body">
								<div class="card-body-icon">
									
								</div>
									<div class="row align-items-center">
										
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
											<h4 class="card-title" style="color: white">MENINGGAL</h4>
												<h5 class="card-desplay-4" style="color: white"><?= $indonesia["meninggal"] ?> orang</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round card style="color: white""  id="card3">
								<div class="card-body">
								<div class="card-body-icon">
								
								</div>
									<div class="row align-items-center">
										
										<div class="col col-stats ml-3 ml-sm-0">
											<div class="numbers">
											<h4 class="card-title" style="color: white">SEMBUH</h4>
												<h5 class="card-desplay-4" style="color: white"><?= $indonesia["sembuh"] ?> orang</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					
				
					</div>
					