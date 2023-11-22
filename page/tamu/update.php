<?php 
	$id 		= $_POST["id"];
	$nama		= $_POST["nama"];
	$no_hp 		= $_POST["no_hp"];
	$jk 		= $_POST["jk"];
	$alamat 	= $_POST["alamat"];
	$email 	    = $_POST["email"];
	$keperluan	= $_POST["keperluan"];
	$gambar 	= $_FILES["gambar"]["name"];

	// jika gambar tidak diganti
	if(empty($gambar)) {
		$mysqli->query("UPDATE daftar_tamu SET 
						nama 		= '$nama',
						no_hp 		= '$no_hp',
						jk 		    = '$jk',
						alamat 		= '$alamat',
						email 		= '$email',
						keperluan 	= '$keperluan'
						WHERE id 	=$id
						");
	} else {
		$hapus = $mysqli->query("SELECT * FROM daftar_tamu WHERE id =$id");
		// menghapus gambar lama
		$namaGambar = mysqli_fetch_array($hapus);
		// nama field gambar
		$lokasi = $namaGambar["gambar"];
		// alamat tempat gambar
		$hapusGambar = "images/tamu/$lokasi";
		// untuk menghapus gambar dari folder
		unlink($hapusGambar);
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/tamu/' . $gambar);
		$mysqli->query("UPDATE daftar_tamu SET
						nama		= '$nama',
						no_hp 		= '$no_hp',
						jk 		    = '$jk',
						alamat   	= '$alamat',
						email  		= '$email',
						keperluan 	= '$keperluan',
						gambar 		= '$gambar'
						WHERE id 	=$id
						");
	}
	// header('location:?page=tamu');
	include("tamu.php")
 ?>