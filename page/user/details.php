<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Daftar User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr>
	<th>No</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
	<th>NAMA</th>
	<th>LEVEL</th>
	<th>FOTO</th>
	</tr>

	<?php
		$mahasiswa = $mysqli->query("SELECT * FROM tb_user ");
		$no = 0;
		while( $m = $mahasiswa->fetch_assoc()){
		$no++;
	?>

	<tr>
        <th scope="row"><?= $no; ?></th>
		<td><?= $m["username"]; ?></td>
		<td><?= $m["password"]; ?></td>
		<td><?= $m["nama"]; ?></td>
		<td><?= $m["level"]; ?></td>
		<td><?= $m["foto"]; ?>
            <img src='images/tamu/<?= $m["foto"]; ?>' width='100px' height='100px'>
        </td>
		
										  
		<?php } ?>
        </tr>
        </tbody>
        </table>
        </div>

