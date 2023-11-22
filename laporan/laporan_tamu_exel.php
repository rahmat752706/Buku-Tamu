<?php

		$host="localhost";
        $user="root";
        $pass="";
        $database="kkp_tamu";
        $mysqli= new mysqli ($host,$user,$pass,$database);
        //Object Oriented Style $mysqli -> new mysqli(host, username, password, dbname, port, socket)

                //check connection
                if ($mysqli -> connect_errno) {
                    trigger_error("Failed to connect to MYSQL: " . $mysqli, E_USER_NOTICE);
                    //trigger_error(message, type)
                }

        $filename = "daftar-tamu_excel-(".date('d-m-Y').").xls";

        header("content-disposition: attachment; filename=$filename");
        header("content-type: application/vdn.ms-excel");

?>
<h2> Laporan Daftar Tamu </h2>

<table border="1">
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
		<td><?php echo "'".$m['no_hp'].""; ?></td>
		<td><?= $m["jk"]; ?></td>
		<td><?= $m["alamat"]; ?></td>
		<td><?= $m["email"]; ?></td>
		<td><?= $m["keperluan"]; ?></td>
		<td><?= $m["tanggal"]; ?></td>
										  
		<?php } ?>
        </tr>
</table>