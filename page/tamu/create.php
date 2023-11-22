<?php
		$nama 		= $_POST['nama'];
		$no_hp 		= $_POST['no_hp'];
		$jk			= $_POST['jk'];
		$alamat 	= $_POST['alamat'];
		$email 	    = $_POST['email'];
		$keperluan  = $_POST['keperluan'];
		$gambar 	= $_FILES['gambar']['name'];
		$tanggal    = date("Y-m-d H:i:s");
		$mysqli->query("INSERT INTO daftar_tamu SET nama='$nama',no_hp='$no_hp',jk='$jk',alamat='$alamat',email='$email',keperluan='$keperluan',gambar='$gambar',tanggal='$tanggal'");
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/tamu/'.$gambar);
		// header('location:?page=tamu');
		include("tamu.php")
?>
