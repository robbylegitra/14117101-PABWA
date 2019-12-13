<!DOCTYPE html>
<html>
<head>
    <title>PHP Lanjut</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<div class="container">
	<h1>Biodata Mahasiswa</h1>
	<form action="TM_7hasil.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<tr><label for="nama">Nama:</label></tr>
			<tr><input type="text" class="form-control" name="nama"></tr>
		</tr>
		<br>
		<tr>
			<tr><label for="alamat">Alamat:</label></tr>
			<tr><input type="text" class="form-control" name="alamat"></tr>
		</tr>
		<br>
		<tr>
			<tr><label for="gender">Jenis Kelamin:</label></tr>
			<br>
			<tr><input type="radio" name="gender" value="Laki-laki" /> Laki-laki</tr>
			<br>
            <tr><input type="radio" name="gender" value="Perempuan" /> Perempuan</tr>
        	<br>
		</tr>
		<br>
		<tr>
			<tr><label for="goldar">Golongan Darah:</label></tr>
			<br>
			<tr><select name="goldar">
				<option value="A"> A</option>
				<option value="B"> B</option>
				<option value="AB"> AB</option>
				<option value="O"> O</option>
				</select></tr>
		</tr>
		<br>
		<br>
		<tr>
			<tr><label for="hobi">Hobby:</label></tr>
			<br>
			<tr><input type="checkbox" name="hobi" value="Melukis"/>
				Melukis
				<br>
				<input type="checkbox" name="hobi" value="Menulis"/>
				Menulis
				<br>
				<input type="checkbox" name="hobi" value="Berolahraga"/>
				Berolahraga
				<br>
				<input type="checkbox" name="hobi" value="Mengoding"/>
				Mengoding
				<br>
				<input type="checkbox" name="hobi" value="Rebahan"/>
				Rebahan
				<br>
				<input type="checkbox" name="hobi" value="Bermain Game"/>
				Bermain Game
				<br>
		</tr>
		<br>
		<tr>
			<tr><label for="keterangan">Keterangan:</label>
			<tr><textarea name="keterangan" class="form-control"></textarea>
		</tr>
		<br>
		<tr>
			<tr><button type="submit" name="submit" class="btn btn-primary">Simpan</button></tr>
		</tr>
	</table>
