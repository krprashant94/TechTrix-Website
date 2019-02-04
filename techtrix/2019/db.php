<?php
	$db_host = "localhost";
	$db_user ="rccfests";
	$db_pass = "Qwertyasd@1234";
	define('_DB_', 'techtrix', true);
	$conn = new PDO('mysql:host='.$db_host.';dbname='._DB_.'',$db_user,$db_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>