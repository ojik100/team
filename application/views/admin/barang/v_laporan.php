<div class="content">
				<div class="page-inner">
				<div class="container">
  <div class="row">
    <div class="col-sm">
	<?php echo form_open('Laporan/perbulan') ?>
        Bulan
<select class="form-control" name="bulan">
<option value="01">Januari</option>
<option value="02">Februari</option>
<option value="03">Maret</option>
<option value="04">April</option>
<option value="05">Mei</option>
<option value="06">Juni</option>
<option value="07">Juli</option>
<option value="08">Agustus</option>
<option value="09">September</option>
<option value="10">Oktober</option>
<option value="12">November</option>
<option value="12">Desember</option>
</select>
    </div>
    <div class="col-sm">
        
Tahun
<select class="form-control" name="tahun">
<?php
$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>

    </div>
    <div class="col-sm">
	</div>

  </div><bR>
  <button class="btn btn-primary">proses</button>
  
            </form>
</div>
</div>
