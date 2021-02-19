<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
	
	// ambil data dari formulir
	$kode_rfid = $_POST['kode_rfid'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	
	// buat query update
	$sql = "UPDATE rfid SET kode_rfid='$kode_rfid', nama='$nama', kelas='$kelas' WHERE kode_rfid='$kode_rfid'";
	$query = mysqli_query($conn, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: data-pengguna.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
} else {
	die("Akses dilarang...");
}

?>
