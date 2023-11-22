<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             CETAK 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
		<a href="./laporan/laporan_tamu_exel.php" class="btn btn-default" target="blank" style="margin-top: 10px; "><i class="fa fa-print" style="margin-right: 7px;"> </i>ExportToExcel</a>

