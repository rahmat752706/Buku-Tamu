<?php 
	$id = $_GET["id"];
	$hapus = $mysqli->query("SELECT * FROM daftar_tamu WHERE id ='$_GET[id]'");
	// memilih gambar untuk dihapus
	$namaGambar = mysqli_fetch_array($hapus);
	// nama field gambar
	$lokasi = $namaGambar["gambar"];
	// alamat tempat gambar
	$hapusGambar = "images/tamu/$lokasi";
	// untuk menghapus gambar dari folder
	unlink($hapusGambar);
	$mysqli->query("DELETE FROM daftar_tamu WHERE id ='$_GET[id]'");
	// header('location:?page=tamu');
	include("tamu.php")

 ?>
 