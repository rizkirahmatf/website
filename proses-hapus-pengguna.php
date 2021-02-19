<?php

include("config.php");

if( isset($_GET['kode_rfid']) ){
	
	// ambil kode_rfid dari query string
	$kode_rfid = $_GET['kode_rfid'];
	
	// buat query hapus
	$sql = "DELETE FROM rfid WHERE kode_rfid='$kode_rfid'";
	$query = mysqli_query($conn, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: data-pengguna.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
