<?php

	$_POST"mail") = $email;
	$_POST("mail2") = $email2;

	if (isset($_POST("envoi"))) {

		if ($email != $email2){

			echo ("Les 2 adresses mails sont différentes. Veuillez vérifier qu'elles correspondent");
		}
		else {

			echo ("Message envoyé !");
		}

		
	}



?>