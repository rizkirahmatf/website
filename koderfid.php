<?php
	include "config.php";
	
	//baca isi tabel tmprfid
	$sql = mysqli_query($conn, "select * from tmprfid");
	$data = mysqli_fetch_array($sql);
	//baca nokartu
	$koderfid = $data['kode_rfid'];
?>

<div class="form-group">
    <input name="rfid" type="text" class="form-control" placeholder="Kode RFID" value="<?php echo $koderfid; ?>">
</div>