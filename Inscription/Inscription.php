<?php 
	include("commun/ouvrir.php");
?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Inscription.css" />
        <title> Inscription </title>
        <form action="postinscription.php" method="post"></form>
    </head>
    <body>

        <img  id="wave" src="Waves.png"/>
        <div class="linear-gradient"></div>
        <img  id="logo" src="G4analysis.png"/>
            
        <a id = "retouracc" href="../Accueil/vraie_page_accueil.php"><< Retour à l'accueil
        </a>
        <p class = "titre"> Inscription</p>

        <nav>

            <img  id="care" src="4Care.png"/>
            <img  id="barre" src ="Barre_separation.png"/>

            <form >
                <p>
                    <label> </label><input type="text" name="pseudo" placeholder = "Nom " size ="30"/>
                    <label> </label><input type="text" name="pseudo" placeholder = "Prenom " size ="30"/>

                    <br />

                    <label> </label><input type="email" name="pseudo" placeholder = "Adresse email " size ="30"/>
                    <label> </label><input type="email" name="pseudo" placeholder = "Confirmation adresse email " size ="30"/>

                    <br />

                    <label> </label><input type="password" name="pseudo" placeholder = "Mot de passe" size ="30"/>
                    <label> </label> <input type ="password" name ="motdepasse" placeholder = "Confirmation Mot de passe "size ="30"/>
                    <label> </label><input type="text" name="pseudo" placeholder = "Ville" size ="30"/>

                    <br />

                    <label> </label><input type="text" name="pseudo" placeholder = "Code postal " size ="30"/>
                    <label> </label><input type="text" name="pseudo" placeholder = "Rue " size ="30"/>
                    <label> </label><input type="text" name="pseudo" placeholder = "Numéro de rue " size ="30"/>

                </p>
            </form>


            <a href="../Nous_contacter/nous_contacter.php" class = "mdp" > Mon adresse n'apparait pas</a>

            <br />
            <br />


            <div class = "alignement">
                <a href="../Dash board/dashboard.php" class = "connexion">S'inscrire</a> <!-- Page de connection compte -->
            </div>

            <br /><br />
            

            <a> En cliquant sur S'inscrire, vous acceptez </a>
            <a href="../CGU/CGU.php"> les conditions générales d'utilisations </a><br /><br />

            <img  id="barre" src ="Barre_separation.png"/>

            <a id="vous">Vous avez déjà un compte?</a>
            <a id="connect" href="../Se_connecter/index.php"> Connectez-vous</a><br /><br />
                
        </nav>

    
    </body>
</html>

<?php 
	include("commun/fermer.php");
?>