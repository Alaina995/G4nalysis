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

                    <label> </label><input type="password" name="pseudo" placeholder = "Confirmation Mot de passe " size ="30"/>
                    <label> </label> <input type ="password" name ="motdepasse" placeholder = "Mot de passe "size ="30"/>
                    <label> </label><input type="text" name="pseudo" placeholder = "Ville" size ="30"/>

                    <br />

                    <label> </label><input type="text" name="pseudo" placeholder = "Code postal " size ="30"/>
                    <label> </label><input type="text" name="pseudo" placeholder = "Rue " size ="30"/>
                    <label> </label><input type="text" name="pseudo" placeholder = "Numéro de rue " size ="30"/>

                </p>
            </form>


            <a href="../Nous_contacter.php" class = "mdp" > Mon adresse n'apparait pas</a>

            <br />
            <br />


            <div class = "alignement">
                <a href="../Dash board.php" class = "connexion">S'inscrire</a> <!-- Page de connection compte -->
            </div>

            <br /><br />
            

            <a> En cliquant sur S'inscrire, vous acceptez </a>
            <a href="CGU.html"> les conditions générales d'utilisations </a><br /><br />
                    
            <a id="cond" href="../CGU/CGU.php">  conditions generales d'utilisations </a>
                
        </nav>

    
    </body>
</html>