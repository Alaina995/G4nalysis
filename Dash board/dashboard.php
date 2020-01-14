<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="dashboard.css" />
        <title>Nav bar verticale</title>
    </head>

    <body>

	
        
        
	<section class="features ">
                <figure>
					<a class="lancer_test">Cliquer pour lancer le test</a>
                    <img src="images_projet/case_temper.png" alt="Tester ton Température">
                    <figcaption id="temperature">Température</figcaption>
					<p id="temperature1">37<a class="unite">°C</a></p>
					<a class="click_box" href="#">
						Ceci est le test de température superficielle du corps.
					</a>
                </figure>
                <figure>
						<a class="lancer_test">Cliquer pour lancer le test</a>
                        <img src="images_projet/case_audit.png" alt="Tester audition">
                        <figcaption  id="audition">Audition</figcaption>
						<p id="audition1">65<a class="unite">%</a></p>
						<a class="click_box" href="#">
							Ceci est le test d'audition.
						</a>
                     </figure>
                     <figure>
					 		<a class="lancer_test">Cliquer pour lancer le test</a>
                            <img src="images_projet/case_coeur.png" alt="Tester la fréquence de coeur">
                            <figcaption id="coeur">Coeur</figcaption>
							<p  id="coeur1">75<a class="unite">Bpm</a></p>
							<a class="click_box" href="#">
								Ceci est le test de fréquence cardiaque.
							</a>
                        </figure>
                        <figure>
							<a class="lancer_test">Cliquer pour lancer le test</a>
                            <img src="images_projet/case_visu.png" alt="Tester la vue">
                            <figcaption  id="vue">Vue</figcaption>
							<p id="vue1">.36<a class="unite">s</a></p>
							<a class="click_box" href="#">
								Ceci est le test de vue / réflexes.
							</a>
                        </figure>
                        <figure>
							<a class="lancer_test">Cliquer pour lancer le test</a>
                            <img src="images_projet/case_freq.png" alt="Tester l'étendue auditive">
                            <figcaption  id="étendue">Étendue auditive</figcaption>
							<p id="étendue1">60<a class="unite">%</a></p>
							<a class="click_box" href="#">
								Ceci est le test d'étendue auditive.
							</a>
                        </figure>
        </section>

    	<?php require('../Nav_Bar_Website/nav_bar_principale.inc.html'); ?>
<!-- 
    	<ul class="nav_bar_horizon">


            <li><button id="nav_deconnexion" href="Page 2.html">Se déconnecter</button></li>
            <li><img  id="nav_menu_bar" src="Menu_Bar-512.png"/></li>
            <li id="bienvenue"><p>Bienvenue, Marc</p></li>
    		<li id="logo_li"><img  id="nav_logo" src="G4analysis.png"/></li>
    		
        </ul>
         -->


    </body>
</html>