<?php

include("config.php");

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	$sql = "DELETE FROM stock WHERE id='$id'";
	$query = mysqli_query($conn, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: data-alat.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
