<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$alat = $_POST['alat'];
	$kategori = $_POST['kategori'];
	$deskripsi = $_POST['deskripsi'];
	
	// buat query update
	$sql = "UPDATE stock SET id='$id', alat='$alat', kategori='$kategori', deskripsi='$deskripsi' WHERE id='$id'";
	$query = mysqli_query($conn, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: data-alat.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
