<html>
	<head>
		<title>Modifier son profil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="modifier_profil_1.css"/>
		<?php 
			session_start();
			require '../Se_connecter/fonctions.php';

			$donnesUser = $_SESSION['donnesUser'];

			$nom = $donnesUser['nom'];
			$prenom = $donnesUser['prenom'];
			$mail = $donnesUser['mail'];


			if (!isset($_SESSION['nomErreur'])){
				$_SESSION['nomErreur'] = "";
			}
			if (!isset($_SESSION['prenomErreur'])){
				$_SESSION['prenomErreur'] = "";
			}
			if (!isset($_SESSION['emailErreur'])){
				$_SESSION['emailErreur'] = "";
			}
			if (!isset($_SESSION['passwordErreur1'])){
				$_SESSION['passwordErreur1']= "";
			}
			if (!isset($_SESSION['passwordErreur2'])){
				$_SESSION['passwordErreur2']= "";
			}
			
			?>
	</head>

	<body>

		<nav>
		    <p id="titre">Modifier mon profil</p>
            <img  id="care" src="4Care.png"/>
            <img  id="barre" src ="Barre_separation.png"/>

            <form method="POST" action="traitement.php" onsubmit="return confirmBoxProfil()">
			    <p>

					<label>Nom </label><input class="input" type="text" name="nom" placeholder = "Nom " size ="30" value=<?php echo escape($nom) ;?>><br />
                	<p class="textErreur"><?php echo $_SESSION['nomErreur']; ?></p>
					<label>Prénom </label><input class="input" type="text" name="prenom" placeholder = "Prenom " size ="30" value=<?php echo escape($prenom) ;?>><br />
					<p class="textErreur"><?php echo $_SESSION['prenomErreur']?></p>

                	<br />

					<label>Adresse mail actuelle </label><p class="input"><?php echo escape($mail) ;?></p><br />
                	<label>Nouvelle adresse mail </label><input id="email1" class="input" type="email" name="email1" placeholder = "Nouvelle adresse mail " size ="30" onfocus="color(this)"><br />
                	<label>Confirmer l'adresse mail </label><input id="email2" class="input" type="email" name="email2" placeholder = "Confirmation adresse email " size ="30" onfocus="verificationEmail()"><br />
					<p class="textErreur"><?php echo $_SESSION['emailErreur']?></p>


                	<br />

                    <label>Pour modifier votre mot de passe, entrez l'ancien mot de passe d'abord </label>
					<input class="input" type="password" name="oldPassword" placeholder = "Ancien Mot de passe " size ="30"><br />
                    <p class="textErreur"><?php echo $_SESSION['passwordErreur1']?></p>

					<label>Nouveau mot de passe </label> <input id="password1" class="input" type ="password" name ="password1" placeholder = "Nouveau Mot de passe "size ="30" onfocus="color(this)"><br />
                    
					
					<label>Confirmer le nouveau mot de passe </label><input id="password2" class="input" type="password" name="password2" placeholder = "Confirmation Mot de passe" size ="30" onfocus="verificationPassword()"><br />
					<p class="textErreur"><?php echo $_SESSION['passwordErreur2']?></p>

					<input type="submit" id="submit" class="connexion" value="Enregistrer">
                </p>
            </form>
			<script src="traitement.js"></script>

	        <a href="../Modifier_Adresse/modifier_mon_adresse.php" class="a_chan"> Changer mon adresse </a><br />

	        <a href="../Supprimer_le_compte/supprimer_le_compte.php" class="a_sup"> Supprimer le compte? </a><br /><br />


	        <div class = "alignement">
   				<a href="../Dash board/dashboard.php" class= "connexion">Enregistrer</a>
	        </div>

	        <p>   </p>
    	</nav>	


		<?php require('../Footer/footer.php'); ?>

    	<?php $title = 'Profil'; ?>
		<?php $currentPage = 'profil'; ?>
    	<?php require('../Nav_Bar_Website/nav_bar_principale.inc.php'); ?>

		


	</body>
</html>