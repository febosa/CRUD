<?php
	define("username","root");
	define("password","energic");
	define("host","localhost");
	define("database","barang");
	$kon = mysql_connect(host, username, password);
	$db = mysql_select_db(database, $kon);
	
?>