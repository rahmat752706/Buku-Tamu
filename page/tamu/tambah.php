<div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Tamu
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
									<form name="form_mahasiswa" action="?page=tamu&aksi=create" method="post" enctype="multipart/form-data">
										
										<div class="form-group">
											<label for="nama">NAMA</label>
											<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
										</div>

										<div class="form-group">
											<label for="no_hp">NO HANDPHONE</label>
											<input type="text" class="form-control" id="no_hp" placeholder="Masukkan No HP" name="no_hp" required>
										</div>
										<div class="form-group">
											<label for="jk">Jenis Kelamin</label>
												<select name="jk" class="form-control" id="jk" name="jk" required>
													<option value="">None</option>
													<option value="Laki-laki">Laki-laki</option>
													<option value="Wanita">Perempuan</option>
												</select>
										</div>

										<div class="form-group">
											<label for="alamat">ALAMAT</label>
											<textarea class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required></textarea>
										</div>

										<div class="form-group">
											<label for="email">EMAIL</label>
											<textarea class="form-control" id="email" placeholder="Masukkan email" name="email" required></textarea>
										</div>

										<div class="form-group">
											<label for="keperluan">KEPERLUAN</label>
											<input type="text" class="form-control" id="keperluan" placeholder="Masukkan keperluan Anda " name="keperluan" required>
										</div>

										<div class="form-group">
											<label for="Gambar">Gambar</label>
											<input type="file" class="form-control" id="gambar" name="gambar" required>
										</div>

										<div class="form-group">
											<button type="reset" class="btn btn-danger">Reset</button>
											<button type="submit" class="btn btn-primary">Simpan</button> 
										</div>

									</form>
									