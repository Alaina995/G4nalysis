<?php
	 define('HOST','localhost');
	 define('DB_NAME', 'g4nalysis2.sql');
	 define('USER','root');
	 define('PASS','');

	 try{
	 	$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
	 	$db - >setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION); 
	 } catch(PDOException $erreur){
	 	echo $erreur;
	 }