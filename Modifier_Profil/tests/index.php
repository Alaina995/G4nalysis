<!DOCTYPE html>
<html>
 <head>
	<title>Formulaire admission</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	
 </head>
 <body>
 	<?php
 	 session_start();
 	 if (!isset($_SESSION['nomErreur'])){
 		$_SESSION['nomErreur'] = "";
 	}
 	if (!isset($_SESSION['prenomErreur'])){
 		$_SESSION['prenomErreur'] = "";
 	}
 	if (!isset($_SESSION['dateErreur'])){
 		$_SESSION['dateErreur'] = "";
 	}
 	if (!isset($_SESSION['emailErreur'])){
 		$_SESSION['emailErreur'] = "";
 	}
 	if (!isset($_SESSION['email2Erreur'])){
 		$_SESSION['email2Erreur'] = "";
 	}
   
 	?>
  <form method="POST" action="traitement.php" onsubmit="return confirmBox()">	
	<label>Nom</label> 
	<input type="text" name="nom">
	<p class="textErreur"><?php echo $_SESSION['nomErreur']; ?></p>
	<label>Prénom</label>
	<input type="text" name="prenom">
	<p class="textErreur"><?php echo $_SESSION['prenomErreur']?></p>
	<label>Date de naissance</label>
	<input type="date"  id="date" name="dateNaissance" >
	<p class="textErreur"><?php echo $_SESSION['dateErreur'] ?></p>
	<label>e-mail</label>
	<input type="text" id="email1" name="email">
	<p class="textErreur"><?php echo $_SESSION['emailErreur']?></p>

	<label>Confirmez email</label>
	<input type="text" id="email2" onfocus="verificationEmail()"  name="emailConfirmation">
	<p class="textErreur"><?php echo $_SESSION['email2Erreur'] ?></p>
	<input type="submit" id="submit"  value="Soumettez votre candidature">
  </form>
	<script src="traitement.js"></script>

 </body>
</html>
