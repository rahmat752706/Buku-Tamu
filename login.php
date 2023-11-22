<?php 
  include "koneksi.php"; 
  ob_start(); 
  session_start(); 
  error_reporting(0); 
  if (isset($_SESSION["login"])) {
      header('location: index.php');
      exit;   
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
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
    .btn-primary {
    background-color: #15c80b;
}
.btn-danger {
    background-color: #f80000;
}
a {
    color: #2713fb;
}

</style>
<body style="background-color:#2713fb;">
<style>
</style>

    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> <font color="white"><bold>LOGIN</bold> </font></h2>
                <p>
                    <img src="images/bekasi.png" width="120" height="120">

                </p>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Masukan Username dan Password </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="cek_login.php">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Masukan Username " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Masukan password" />
                                        </div>
                                    <input type="submit" name="login" value="login" class="btn btn-primary"> 
                                    <input type="reset" value="Batal" name="batal" class="btn btn-danger">
                                    <p> Belum punya akun?<a href="daftar.php">Daftar di sini</a><br></p>
                            </div> 
                        </div>
                    </div>  
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php 
?> 