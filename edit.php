<form action="simpan.php" method="post">
	<h1>EDIT BARANG</h1>
	<table border="0" cellpadding="1">
		<?php	
			include "koneksi.php";
			$id = $_GET['id'];
			$sql = "SELECT*FROM tabel_barang WHERE id='$id'";
			$result = mysql_query($sql);
			while($rows = mysql_fetch_array($result)){
		?>			
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo "$rows[nama]" ?>"></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td>:</td>
			<td><input type="text" name="jumlah" value="<?php echo "$rows[jumlah]" ?>"></td>
		</tr>
		<tr>
			<td colspan="3" align="right"><input type="submit" name="submit" value="Simpan"></td>
		</tr>
		<?php
		}
		?>
	</table>
</form>