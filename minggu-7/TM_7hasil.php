<?php 
	if (isset($_POST["submit"])) {
		$nama = $_POST["nama"];
		$alamat = $_POST["alamat"];
		$gender = $_POST["gender"];
		$goldar = $_POST["goldar"];
		$hobi = $_POST["hobi"];
		$keterangan = $_POST["keterangan"];
 ?>

<table border="1">
 	<tr>
 		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>JENIS KELAMIN</th>	
 		<th>GOLONGAN DARAH</th>
 		<th>HOBBY</th>
		<th>KETERANGAN</th>
 	</tr>
 	<tr>
 		<td><?php echo $nama; ?></td>
		<td><?php echo $alamat; ?></td>
		<td><?php echo $gender; ?></td>
		<td><?php echo $goldar; ?></td>
 		<td><?php echo $hobi; ?></td>
 		<td><?php echo $keterangan; ?></td>
 	</tr>
 
	 <?php
 	} 
 ?>