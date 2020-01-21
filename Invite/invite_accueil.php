<html>
	<head>
		<title>Supprimer le compte</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="supprimer_le_compte.css"/>
		<?php session_start();?>
	</head>


	<body>

		<ul class="nav_bar">
    		<li>
    			<a href="Page 2.html">
	    			<div class="ligne">
	    				<img src="../Invite/invite_page_accueil.php" />
	    				Accueil
	    			</div>
	    		</a>
    		</li>
    		<li>
    			<a href="Page 2.html">
	    			<div class="ligne">
	    				<img class="link" src="../Invite/invite_dashboard.php" alt="Profile picture" />
	    				Démarer un test
	    			</div>
	    		</a>
    		</li>
    		<li class="active">
    			<a href="Page 2.html">
	    			<div class="ligne">
	    				<img class="link" src="Experiment_Results-512.png" alt="Profile picture" />
	    				Tests
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


            <li><a id="nav_deconnexion" href="Page 2.html">Créer un compte</a></li>
            <li><img  id="nav_menu_bar" src="Menu_Bar-512.png"/></li>
            <li id="bienvenue"><p>Bienvenue !</p></li>
    		<li id="logo_li"><img  id="nav_logo" src="G4analysis.png"/></li>
    		
        </ul>

        <br />
        <br />

          
		<div id="Supprimer_compte" align="center">

			<h1>Vous êtes connecté en tant qu'invité </h1><br /><br />

			<p>En tant qu'invité vous pouvez effectuer tous les tests disponible avec notre appareil 4care, mais vos données ne seront pas enregistrées</p><br />

		</div>

        <div class = "alignement">
                <li><a href="compte_sup.html" class = "button2">Démarrer une mesure</button></a>
        </div>


		<?php require('../Footer/footer.php'); ?>


	</body>
</html>