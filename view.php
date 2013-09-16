<?php
	include "koneksi.php";

	$sql = "SELECT*FROM tabel_barang";
	$result = mysql_query($sql);
	while($rows = mysql_fetch_array($result)){
		echo "<table border=1 cellpadding=5>";
		echo "<tr>";
		echo "<td>ID</td>";
		echo "<td>Nama Barang</td>";
		echo "<td>Jumlah Barang</td>";
		echo "<td colspan=2>Keterangan</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>$rows[id]</td>";
		echo "<td>$rows[nama]</td>";
		echo "<td>$rows[jumlah]</td>";
		echo "<td><a href=edit.php?id=$rows[id]>Edit</a> | <a href=hapus.php?id=$rows[id]>Hapus</a></td>";
		echo "</tr>";
		echo "</table>";
		
	}
?>
		
		