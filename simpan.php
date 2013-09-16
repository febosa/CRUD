<?php
	include "koneksi.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	
	$sql = "UPDATE tbl_barang SET nama='$nama',jumlah='$jumlah' WHERE id='$id';";
	$result = mysql_query($sql);
	echo header("Location:view.php");
?>