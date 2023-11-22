<?php 

session_start(); 
error_reporting(0); 
if (isset($_SESSION["login"])) {
    header('location: login.php');
    exit;

}

?>
<style>
      #page-inner {
    background-color: #f5f5f5!important;
  
}
</style>
 <marquee><strong>BUKU FORMULIR TAMU YANG BERKUNJUNG</strong></marquee>
<!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="color: black;">SELAMAT DATANG[ADMIN]</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			            <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-green set-icon">
                                <i class="fa fa-list"></i>
                            </span>
                            <div class="text-box" >
                            <b><?php
                 
                            $mahasiswa= mysqli_query($mysqli,"SELECT * FROM daftar_tamu");
                            
                            $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);
                
                            ?>
                            <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> FORM TAMU </p></b>
                            <a href="?page=tamu">
                                <p class="text-muted">Lihat Detail</p></a>
                            </div>
                        </div>
		            </div>

                    <div class="col-md-3 col-sm-6 col-xs-6">           
			            <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-green set-icon">
                                <i class="fa fa-database"></i>
                            </span>
                            <div class="text-box" >
                            <b><?php
                            $mahasiswa= mysqli_query($mysqli,"SELECT * FROM daftar_tamu");
                            $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);
                            
                            ?>
                            <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> DATA TAMU</p></b>
                            <a href="?page=data">
                                <p class="text-muted">Lihat Details</p></a>
                            </div>
                        </div>
		            </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			            <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-green set-icon">
                                <i class="fa fa-print"></i>
                            </span>
                            <div class="text-box" >
                                <b><?php
                            $mahasiswa= mysqli_query($mysqli,"SELECT * FROM daftar_tamu");
                            $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                            ?>
                            <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> PRINT</p></b>
                            <a href="?page=cetak">
                                <p class="text-muted">Lihat Details</p></a>
                            </div>
                        </div>
		            </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-green set-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <div class="text-box" >
                                <b><?php
                            
                            $mahasiswa= mysqli_query($mysqli,"SELECT * FROM tb_user");
                            
                            $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                            ?>
                            <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> User</p></b>
                            <a href="?page=user">
                                <p class="text-muted">Lihat Details</p></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-md-8">
                            <!-- <div class="panel panel-default"> -->
                                <div class="panel-heading">
                                DAFTAR TAMU 
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>NAMA</th>
                                            <th>NO HP</th>
                                            <th>JENIS KELAMIN</th>
                                            <th>ALAMAT</th>
                                            <th>EMAIL</th>
                                            <th>KEPERLUAN</th>
                                            <th>TANGGAL</th>
                                            </tr>

                                            <?php
                                                $mahasiswa = $mysqli->query("SELECT * FROM daftar_tamu ");
                                                $no = 0;
                                                while( $m = $mahasiswa->fetch_assoc()){
                                                $no++;
                                            ?>

                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $m["nama"]; ?></td>
                                            <td><?= $m["no_hp"]; ?></td>
                                            <td><?= $m["jk"]; ?></td>
                                            <td><?= $m["alamat"]; ?></td>
                                            <td><?= $m["email"]; ?></td>
                                            <td><?= $m["keperluan"]; ?></td>
                                            <td><?= $m["tanggal"]; ?></td>
                                                                            
                                            <?php } ?>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>
                        <style>
                            .tk {
                                margin-top:500px;
                                width: 30%;
                            }
                            @media screen and (max-width: 1024px) {
                                .tk {
                                    margin-top:0;
                                    width:100%;
                                }
                            }
                        </style>
                        <div class="col-md-4 col-sm-4 tk">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        DISKOMINFOSANTIK
                                    </div>
                                    <div class="panel-body">
                                        <p><center><marquee><strong>WELCOME</marquee></strong> <br>
                                        </p></center>
                                    </div>
                                    <div class="panel-footer">
                                        DISKOMINFO
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>   
                <div id="Footer" >
            <tr>
         <center><td>&copy;  Copywright  2022 ❤️Dollar_rahmat_hasibuan  </center></td>
            </tr>
    </div>
            <?php include "koneksi.php"; ?>