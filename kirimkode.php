<?php
	include "koneksi.php";

	//baca nomor kartu dari NodeMCU
	$koderfid = $_GET['kode_rfid'];
	//kosongkan tabel tmprfid
	mysqli_query($conn, "delete from tmprfid");

	//simpan nomor kartu yang baru ke tabel tmprfid
	$simpan = mysqli_query($conn, "insert into tmprfid(kode_rfid)values('$koderfid')");
	if($simpan)
		echo "Berhasil";
	else
		echo "Gagal";
?>