<html>
	<head>
		<title>Modifier mon adresse</title>
		<meta charset="uft-8">
		<link rel="stylesheet" href="modifier_mon_adresse.css"/>
	</head>
	<body>

        <nav class= "cadre">
        	<img  id="care" src="4Care.png"/>
            <img  id="barre" src ="Barre_separation.png"/>

            <form >
                <p>
                	<label> </label><input type="text" name="pseudo" placeholder = "Ville " size ="30"/><br />

                    <label> </label><input type="text" name="pseudo" placeholder = "Code postal " size ="30"/><br />
                    <label> </label><input type="text" name="pseudo" placeholder = "Rue " size ="30"/><br />
                    <label> </label><input type="text" name="pseudo" placeholder = "Numero de rue " size ="30"/><br />
				</p>
            </form>

            <div class = "alignement">
				<a href = "../Modifier_Profil/modifier_profil_1.php" 
				  class = "button1">Annuler</a>

                <a href="../Modifier_Profil/modifier_profil_1.php" class = "button2">Enregistrer</a>
            </div>
            	<p> </p>
		</nav>




		<?php require('../Footer/footer.php'); ?>

    	<?php $title = 'Profil'; ?>
		<?php $currentPage = 'profil'; ?>
    	<?php require('../Nav_Bar_Website/nav_bar_principale.inc.php'); ?>


	</body>
</html>


