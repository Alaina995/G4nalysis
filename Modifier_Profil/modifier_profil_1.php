<html>
	<head>
		<title>Modifier son profil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="modifier_profil_1.css"/>
		<?php session_start();?>
	</head>

	<body>

		<nav>
            <img  id="care" src="4Care.png"/>
            <img  id="barre" src ="Barre_separation.png"/>

            <form >
			    <p>

					<label> </label><input class="input" type="text" name="pseudo" placeholder = "Nom " size ="30"/><br />
                	<label> </label><input class="input" type="text" name="pseudo" placeholder = "Prenom " size ="30"/><br />

                	<br />

                	<label> </label><input class="input" type="email" name="email" placeholder = "Ancienne adresse mail " size ="30"/><br />
                	<label> </label><input class="input" type="email" name="email" placeholder = "Nouvelle adresse mail " size ="30"/><br />
                	<label> </label><input class="input" type="email" name="email" placeholder = "Confirmation adresse email " size ="30"/><br />


                	<br />

                    <label> </label><input class="input" type="password" name="motdepasse" placeholder = "Ancien Mot de passe " size ="30"/><br />
                    <label> </label> <input class="input" type ="password" name ="motdepasse" placeholder = "Nouveau Mot de passe "size ="30"/><br />
                    <label> </label><input class="input" type="password" name="motdepasse" placeholder = "Confirmation Mot de passe" size ="30"/><br />

                </p>
            </form>


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