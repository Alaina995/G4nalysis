<html>
	<head>
		<title>Modifier mon adresse</title>
		<meta charset="uft-8">
		<link rel="stylesheet" href="modifier_mon_adresse.css"/>
	</head>
	<body>
        <p class = "titre"> Modifier mon adresse</p>

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
				<button class = "button1">Annuler</button>
				</a>

                <button class = "button2">Enregistrer</button>
            </div>
		</nav>



		<footer>
			<div class="footer">
					<li><a href="#"> Mentions legales</a></li>
					<li><a href="#"> Qui sommes-nous?</a></li>
					<li><a href="#"> Questions frequentes</a></li>
					<li><a href="#"> Nous contacter</a></li>
			</div>
		</footer>
		
		<?php $title = 'Profil'; ?>
		<?php $currentPage = 'profil'; ?>
    	<?php require('../Nav_Bar_Website/nav_bar_principale.inc.php'); ?>
	</body>
</html>


