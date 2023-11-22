<?php
		 include "koneksi.php";
		$username 		= $_POST['username'];
		$password 		= $_POST['password'];
		$nama			= $_POST['nama'];
		$level 	        = $_POST['level'];
		$foto 	        = $_FILES['foto']['name'];

		$cari = $mysqli->query("SELECT COUNT(*) FROM tb_user WHERE username = '$username'");
		$jumlah = $cari->fetch_row();
		// echo $jumlah[0];
		
		if(intval($jumlah[0]) <= 0){
			$mysqli->query("INSERT INTO tb_user SET username='$username',password='$password',nama='$nama',level='$level',foto='$foto'");
			move_uploaded_file($_FILES['foto']['tmp_name'], 'images/tamu/'.$foto);
			?>
			<script>
				alert("Daftar Berhasil");
				window.location.href = "login.php";
			</script>
			<?php
			//header('Location:login.php'); 
		}else{
			?>
			<script>
				alert("Username Sudah Terdaftar Silahkan Gunakan Username Yang Lain");
				window.location.href = "daftar.php";
			</script>
			<?php
		}
?>
