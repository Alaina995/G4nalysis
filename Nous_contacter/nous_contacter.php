<html>
	<head>
		<title>Nous contacter</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="nous_contacter.css"/>
		<?php session_start();?>
	</head>

	<form id="contact" method="post" action="traitement_formulaire.php">
        <img  id="logo" src="G4analysis.png"/>
        
        <a id = "retouracc" href="../Accueil/vraie_page_accueil.php"><< Retour à l'accueil
        </a>

        <nav>
            <p class = "titre">Nous contacter</p>
            <img  id="care" src="4Care.png"/>
            <img  id="barre" src ="Barre_separation.png"/>

            <form >
                <p>
                    <label>Nom</label><input class="input" type="text" id="nom"
			        name="nom" placeholder="Quel est votre nom?"/ required size ="30"/><br />
			        
                    <label>Email</label><input class="input" type="email"id="email" name="email" placeholder="votre_email@email.com"/ required size ="30"/>
               
                    <br />

                    <label>Message</label><textarea id="message" name="message" rows="4" placeholder="Ecrivez votre message ici..."/ required required size ="30"></textarea><br />

                    <input class="button" type="submit" id ="envoi" name="envoi" value="Envoyer votre message" />
                </p>
            </form>
                
        </nav>
	</body>
</html>
