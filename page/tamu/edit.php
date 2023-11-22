<?php 
	$id = $_GET["id"];
	$edit = $mysqli->query("SELECT * FROM daftar_tamu WHERE id =$id");
	$e = mysqli_fetch_array($edit);
 ?>

 <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Tamu
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">	
                                	<form name="form_mahasiswa" action="?page=tamu&aksi=update" method="post" enctype="multipart/form-data">
									<div class="form-group">
											<label for="nama">NAMA</label>
											<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Tamu Berkunjung" value="<?= $e["nama"]; ?>" required>
									 	</div>

										<div class="form-group">
											<label for="no_hp">NO HANDPHONE</label>
											<input type="hidden" name="id" value="<?= $e["id"]; ?>">
									 		<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone" value="<?= $e["no_hp"]; ?>" required>
									 	</div>
										<div class="form-group">
											<label for="jk">Jenis Kelamin</label>
											<select name="jk" class="form-control" id="jk" name="jk" required>
													<option value="<?= $e["jk"]; ?>"><?= $e["jk"]; ?></option>
													<option value="Laki-laki">Laki-laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
										</div>

										<div class="form-group">
											<label for="alamat">ALAMAT</label>
											<textarea type="text" class="form-control" id="alamat" name="alamat" value="<?= $e["alamat"]; ?>" required><?= $e["alamat"]; ?></textarea>
									 	</div>

										<div class="form-group">
											<label for="email">EMAIL</label>
											<textarea type="text" class="form-control" id="email" name="email" value="<?= $e["email"]; ?>" required><?= $e["email"]; ?></textarea>
									 	</div>

										<div class="form-group">
											<label for="keperluan">KEPERLUAN</label>
											<textarea type="text" class="form-control" id="keperluan" name="keperluan" value="<?= $e["keperluan"]; ?>" required><?= $e["keperluan"]; ?></textarea>
									 	</div>

										<div class="form-group">
								 		<label for="gambar">Gambar</label>
								 		<input type="file" class="form-control" id="gambar" name="gambar">
								 		<span><?= $e["gambar"]; ?></span>
								 	</div>

									 	<div class="form-group">
									 		<button type="reset" class="btn btn-danger">Reset</button>
											<button type="submit" class="btn btn-primary">Perbarui</button>
									 	</div>

									 </form>