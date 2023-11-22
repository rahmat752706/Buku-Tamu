<?php 
  include "koneksi.php"; 
  ob_start(); 

  session_start(); 
  error_reporting(0); 
  if (isset($_SESSION["login"])) {
      header('location: login.php');
      exit;   
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Daftar</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<style>
    body {
    background-color: #2713fb;
}
a {
    color: #2713fb;
}
.btn-primary {
    background-color: #2713fb;
}
.btn-danger {
    background-color: #f80000;
}
</style>
<style>
body {
  background-image: url('images/back.jpg') ;
    }
</style>
<body><div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> <font color="white"><bold>FORM PENDAFTARAN</font></h2>
               
                 <br />
            </div>
        </div>
         <div class="row ">
         <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                <br /><br />
                            <form name="form_mahasiswa" action="proses_daftar.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
											<label for="username">USERNAME</label>
											<input type="text" class="form-control" id="username" placeholder="Input username" name="username" required>
										</div>

										<div class="form-group">
											<label for="password">PASSWORD</label>
											<input type="text" class="form-control" id="password" placeholder="Input password" name="password" required>
										</div>
                                        <div class="form-group">
											<label for="nama">NAMA</label>
											<input type="text" class="form-control" id="nama" placeholder="Input nama" name="nama" required>
										</div>
										<div class="form-group">
											<label for="level">LEVEL</label>
												<select name="level" class="form-control" id="level" name="level" required>
													<option value="admin">ADMIN</option>
													<option value="admin">ADMIN</option>
												</select>
										</div>
										<div class="form-group">
											<label for="foto">FOTO</label>
											<input type="file" class="form-control" id="foto" name="foto" required>
										</div>
                                    
                                        <input type="submit" name="daftar" value="Daftar" class="btn btn-primary"> 
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger">
                                        <p> Sudah punya akun?
                                         <a href="login.php">Login di sini</a>
                                         </p>

                            </div>
                            </form>
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>



<!-- <?php 

// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $sql = $mysqli->query("SELECT * FROM tb_user WHERE username='$username' and passwordword='$password'");

//     $data = $sql->fetch_assoc();

//     $ketemu = $sql->num_rows;

//     if ($ketemu >=1) {
//         session_start();
//         if ($data['admin'] == "admin") {
//             $_SESSION['admin'] = $data['id'];
//             header("location: index.php");
//         }
//     }

//}

?> -->