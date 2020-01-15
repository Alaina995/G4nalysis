<html>
	<head>
		<title>Modifier son profil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="modifier_profil_1.css"/>
	</head>

	<body>

		<!-- <img  id="wave" src="Waves.png"/> -->


		<nav>
			<h1>Modifier mon profil</h1>

			<img src="icone_user.png" alt="icone_user"><br />
            <div class = "changpho">
                <a href="#" class = "chang">Changer de photo</a>
            </div>  

            <form >
			    <p>

					<label> </label><input type="text" name="pseudo" placeholder = "Nom " size ="30"/><br />
                	<label> </label><input type="text" name="pseudo" placeholder = "Prenom " size ="30"/><br />

                	<br />

                	<label> </label><input type="email" name="email" placeholder = "Ancienne adresse mail " size ="30"/><br />
                	<label> </label><input type="email" name="email" placeholder = "Nouvelle adresse mail " size ="30"/><br />
                	<label> </label><input type="email" name="email" placeholder = "Confirmation adresse email " size ="30"/><br />


                	<br />

                    <label> </label><input type="password" name="motdepasse" placeholder = "Ancien Mot de passe " size ="30"/><br />
                    <label> </label> <input type ="password" name ="motdepasse" placeholder = "Nouveau Mot de passe "size ="30"/><br />
                    <label> </label><input type="password" name="motdepasse" placeholder = "Confirmation Mot de passe" size ="30"/><br />

                </p>
            </form>


	        <a href="modifier_mon_adresse.html" class="a_chan"> Changer mon adresse </a><br />

	        <a href="../Supprimer le compte - V2/supprimer_le_compte.php" class="a_sup"> Supprimer le compte? </a><br /><br />


	        <div class = "alignement">
   				<a href="#" class= "connexion">Enregistrer</a>
	        </div>

	        <p>   </p>
    	</nav>	

    	<?php $title = 'Profil'; ?>
		<?php $currentPage = 'profil'; ?>
    	<?php require('../Nav_Bar_Website/nav_bar_principale.inc.php'); ?>



	</body>
</html>