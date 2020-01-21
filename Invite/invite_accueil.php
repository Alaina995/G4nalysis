<html>
	<head>
		<title>Invite_Accueil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="invite_accueil.css"/>
		<?php session_start();?>
	</head>


	<body>

		<ul class="nav_bar">
    		<li>
    			<a href="../Invite/invite_accueil.php">
	    			<div class="ligne">
	    				<img src="home-icon-png-round-7.png" />
	    				Accueil
	    			</div>
	    		</a>
    		</li>
    		<li>
    			<a href="../Invite/invite_dashboard.php">
	    			<div class="ligne">
	    				<img src="start-button-icon-png-16.png" />
	    				Démarer un test
	    			</div>
	    		</a>
    		</li>
    		
    		<li class="button_parametres" >
    			<a href="Page 2.html">
	    			<div class="ligne">
	    				<img class="link" src="settings.png" alt="Profile picture" />
	    				Paramètres
	    			</div>
	    		</a>
    		</li>
    		<li class="button_langue">
    			<a href="Page 2.html">
	    			<div class="ligne">
	    				<img class="link" src="language.png" alt="Profile picture" />
	    				Changer la langue
	    			</div>
	    		</a>
    		</li>
    	</ul>
    	
    	

    	<ul class="nav_bar_horizon">


            <li><a id="nav_deconnexion" href="../Inscription/Inscription.php">Créer un compte</a></li>
            <li><img  id="nav_menu_bar" src="Menu_Bar-512.png"/></li>
            <li id="bienvenue"><p>Bienvenue !</p></li>
    		<li><a href="../Accueil/vraie_page_accueil.php" id="logo_li"><img  id="nav_logo" src="G4analysis.png"/><a/></li>
    		
        </ul>

        <br />
        <br />

          
		<div id="Supprimer_compte" align="center">

			<h1>Vous êtes connecté en tant qu'invité </h1><br /><br />

			<p>En tant qu'invité vous pouvez effectuer tous les tests disponible avec notre appareil 4care, mais vos données ne seront pas enregistrées</p><br />

		</div>

		<br /><br /><br />

        <div class = "alignement">
           	<li><a href="../Invite/invite_dashboard.php" class = "button2">Démarrer les mesures</button></a>
        </div>

        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


		<?php require('../Footer/footer.php'); ?>


	</body>
</html>