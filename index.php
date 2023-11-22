<?php 
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
    <title>buku tamu diskominfo </title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- framework bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- datepicker bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/locales/bootstrap-datepicker.id.min.js"></script>
</head>
<?php 
    if (empty ($_SESSION['username']) AND empty($_SESSION['passuser'])) {
        echo "<center><br><br><br><br><br><br><br><br><br><br><br><div><img src='images/warning.png' height=180 width=200></div><br>";
        echo "<center> Untuk Mengakses Admin Buku-Tamu DISKOMINFO <br> <b> Anda Harus Login Terlebih Dahulu</b>";
        echo "<meta http-equiv='Refresh' content='4; URL=login.php'>";
    }else{
 ?>
<style>
    .sidebar-collapse .nav > li > a {
    background: #2713fb;
    }
    #wrapper {
    background: #2713fb;
}
.navbar-side {
    background-color: #2713fb;
}
.navbar-cls-top .navbar-brand {
background: #2713fb;    
}
.navbar-cls-top {
    background: #2713fb ;
}
.btn-primary {
    background-color: #2713fb;
}
.panel-back {
    background-color: #00def4;
}
.panel-footer {
    color:white;
    background-color:#2713fb;
}
.panel-success > .panel-heading {
    color:white;
    background-color: #2713fb;
}
.panel-default > .panel-heading {
    color:white;
    background-color: #2713fb;
}
.btn-default {
    color:white;
    background-color: #2713fb;
}
.pagination > .disabled > span, .pagination > .disabled > span:hover, .pagination > .disabled > span:focus, .pagination > .disabled > a, .pagination > .disabled > a:hover, .pagination > .disabled > a:focus {
    color:white;
    background-color: #2713fb;
}
div.dataTables_info {
    color:white;
    background-color: #2713fb;
}
</style>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> <strong> BUKU TAMU DISKOMINNFO </strong></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Today : <?php $d=date('d-m-Y'); echo "$d"; ?>  &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="images/bekasi.png" class="user-image img-responsive"/>
					</li>			
                    <li>
                        <a  href="?home.php"><i class="fa fa-home fa-2x"></i> DASHBOARD</a>
                    </li>
                    <li>
                        <a  href="?page=tamu"><i class="fa fa-list fa-2x"></i>FORM BUKU TAMU</a>
                    </li>
                    <li>
                        <a  href="?page=data"><i class="fa fa-database fa-2x"></i>DATA TAMU</a>
                    </li>
                    <li>
                        <a  href="?page=cetak"><i class="fa fa-print fa-2x"></i> CETAK BUKU TAMU</a>
                    </li>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                             include "pages.php";
                        ?>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
 <?php } ?>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>