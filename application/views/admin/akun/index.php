<BR>
<div class="container">
<h2>Detail Akun<hr></h2>
<table class="table table-bordered">
		<tr>
		<th><B>Nama Lengkap</B></th>
			<th><B>Alamat</B></th>
			<th><B>Kontak</B></th>
			<th><b>Email</b></th>
			<th><B>Poto</B></th>
		</tr>
		<tr>
		<?php foreach ($suplayer as $b) : ?>

<td>: <?= $b->nama ?></td>
<td>: <?= $b->alamat ?></td>
<td>: <?= $b->kontak ?></td>
<td>: <?= $b->email ?></td>
<td>: <img src=""></td>


</tr>

<?php endforeach;?>
	
	</table>
</div>
