
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Tamu 
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
											<th>Foto</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
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

										  	<td><img src="images/tamu/<?= $m["gambar"]; ?>" height="70"></td>
										  	<td>
							
										  	</td>
										  <?php } ?>
                                    	</tr>
                                    </tbody>
                                </table>
                            </div>
              