<?php 
	
	$liaison = mysqli_connect("localhost","root","") or die ("Impossible d'accéder à la BDD wtf");
	mysqli_select_db($liaison, "g4nalysis") or die ("Impossible d'accéder à la BDD wtf");
	
?>