<?php
	ini_set('display_errors',0);
	
	$localhost = "localhost";
	$user = "root";
	$password = "";
	$namedb = "wedding_master";
	
	$conn = mysqli_connect($localhost, $user, $password, $namedb);
	
	if (!$conn)
	{
		die("KONEKSI GAGAL" . mysqli_connect_error());
	}

?>