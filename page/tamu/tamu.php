<a href="?page=tamu&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px; " ><i class="fa fa-plus" style="margin-right: 7px;"> </i>Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Daftar Tamu
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
											<th>Aksi</th>
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
										  		<a href="?page=tamu&aksi=details&id=<?php echo $m['id'];?>" class="btn btn-success">Details <i class="fa fa-info-circle text-white"></i></a></button>
										  		<a href="?page=tamu&aksi=edit&id=<?php echo $m['id'];?>" class="btn btn-info">Edit <i class="fa fa-edit text-white"></i></a></button>
												<a href="?page=tamu&aksi=delete&id=<?php echo $m['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus data ini?');">Hapus <i class="fa fa-trash text-white"></i></a>
										  	</td>
										  <?php } ?>
                                    	</tr>
                                    </tbody>
                                </table>
                            </div>

