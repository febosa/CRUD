<html>
	<head>
		<title>Welcome</title>
	</head>
	<body>
	<h1>DATA BARANG</h1>
	<form action="Input.php" method="post" name="form">
	<table border="0" cellpadding="5">
		<tr>
			<td>ID Barang</td>
			<td>:</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td>:</td>
			<td><input type="text" name="jumlah"></td>
		</tr>
		<tr>
			<td colspan="3" align="right"><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</table>
	</form>
	</body>
</html>
		<?php
	include "koneksi.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	
	$sql = "INSERT INTO tabel_barang VALUES ('$id','$nama','$jumlah');";
	$result = mysql_query($sql);
	echo "Data telah disimpan, dan untuk lihat hasilnya <a href=view.php>disini</a>";
?>
	