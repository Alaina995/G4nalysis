<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="invite_dashboard.css" />
        <title>Accueil</title>
		<?php
			session_start();

			require '../Se_connecter/fonctions.php';
			$bdd = getBdd();

			$login = $_SESSION['mail'];
			$requete = "SELECT * FROM users WHERE mail=?";
			$resultat = $bdd->prepare($requete);
			$resultat->execute(array($login));

			$donnesUser = $resultat->fetch();

			// récupération des test
			$requete = "SELECT * FROM tests WHERE idUser =? ORDER BY dateTime";
			$resultat = $bdd->prepare($requete);
			$resultat->execute(array($donnesUser['id']));

			$testsUser = $resultat->fetchAll();
			$nb_data = count($testsUser);

			for($capteurId = 1; $capteurId <= 5 ; $capteurId++)
			{
				for($i = 0; $i <$nb_data ; $i++)
				{
					if($capteurId == 1 && $testsUser[$i]['idCapteur'] == 1){
						$temperature = arrondi($testsUser[$i]['valeur']);
					}


					if($capteurId == 2 && $testsUser[$i]['idCapteur'] == 2){
						$audition = arrondi($testsUser[$i]['valeur']);
					}


					if($capteurId == 3 && $testsUser[$i]['idCapteur'] == 3){
						$coeur = arrondi($testsUser[$i]['valeur']);
					}


					if($capteurId == 4 && $testsUser[$i]['idCapteur'] == 4){
						$vue = arrondi($testsUser[$i]['valeur']);
					}


					if($capteurId == 5 && $testsUser[$i]['idCapteur'] == 5){
						$etendueAudio = arrondi($testsUser[$i]['valeur']);
					}
				}
			}

			if(!isset($temperature)){
				$temperature = "NC";
			}
			if(!isset($audition)){
				$audition = "NC";
			}
			if(!isset($coeur)){
				$coeur = "NC";
			}
			if(!isset($vue)){
				$vue = "NC";
			}
			if(!isset($etendueAudio)){
				$etendueAudio = "NC";
			}


			$prenomUser = $donnesUser['prenom'];
			$_SESSION['donnesUser'] = $donnesUser;
			$_SESSION['prenomUser'] = $prenomUser;
		?>
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
        
        
	<section class="features ">
                <figure>
					<a class="lancer_test">Cliquer pour lancer le test</a>
                    <img classe="images" src="case_temper.png" alt="Tester ton Température">
                    <figcaption id="temperature">Température</figcaption>
					<p id="temperature1"><?php echo "" . escape($temperature) ;?><a class="unite">°C</a></p>
					<a href="..\Démarrer un ou plusieurs tests\DebutTestTemp.html" class="click_box" href="#">
						Ceci est le test de température superficielle du corps.
					</a>
                </figure>
                <figure>
					<a  class="lancer_test">Cliquer pour lancer le test</a>
					<img classe="images" src="case_audit.png" alt="Tester audition">
					<figcaption  id="audition">Audition</figcaption>
					<p id="audition1"><?php echo "" . escape($audition) ;?><a class="unite">%</a></p>
					<a href="..\Démarrer un ou plusieurs tests\DebutTestAudition.html" class="click_box" href="#">
						Ceci est le test d'audition.
					</a>
				</figure>
				<figure>
					<a class="lancer_test">Cliquer pour lancer le test</a>
					<img classe="images" src="case_coeur.png" alt="Tester la fréquence de coeur">
					<figcaption id="coeur">Coeur</figcaption>
					<p  id="coeur1"><?php echo "" . escape($coeur) ;?><a class="unite">Bpm</a></p>
					<a href="..\Démarrer un ou plusieurs tests\DebutTestCoeur.html" class="click_box" href="#">
						Ceci est le test de fréquence cardiaque.
					</a>
				</figure>
				<figure>
					<a class="lancer_test">Cliquer pour lancer le test</a>
					<img classe="images" src="case_visu.png" alt="Tester la vue">
					<figcaption  id="vue">Vue</figcaption>
					<p id="vue1"><?php echo "" . escape($vue) ;?><a class="unite">s</a></p>
					<a href="..\Démarrer un ou plusieurs tests\DebutTestVisuel.html" class="click_box" href="#">
						Ceci est le test de vue / réflexes.
					</a>
				</figure>
				<figure>
					<a class="lancer_test">Cliquer pour lancer le test</a>
					<img classe="images" src="case_freq.png" alt="Tester l'étendue auditive">
					<figcaption  id="étendue">Etendue audio</figcaption>
					<p id="étendue1"><?php echo "" . escape($etendueAudio) ;?><a class="unite">%</a></p>
					<a href="..\Démarrer un ou plusieurs tests\DebutTestEtendueAuditive.html" class="click_box" href="#">
						Ceci est le test d'étendue auditive.
					</a>
				</figure>
        </section>
    </body>
</html>