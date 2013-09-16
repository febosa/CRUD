<?php
	include "koneksi.php";
	$id = $_GET['id'];
	
	$sql = "DELETE FROM tabel_barang WHERE id='$id';";
	$result = mysql_query($sql);
	if(!result){
		echo "gagal dihapus, <a href=view.php>Kembali</a>";
	}
	else{
		header("Location:view.php");
	}
?>