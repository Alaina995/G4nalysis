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
        
    
        <p class = "titre">  Inscription</p>

        <nav>

            <img  id="care" src="4Care.png"/>
            <img  id="barre" src ="Barre_separation.png"/>

            <form >
                <p>
                	<label> </label><input type="text" name="nom" placeholder = "Nom " size ="30"/>
                	<label> </label><input type="text" name="prenom" placeholder = "Prenom " size ="30"/>


                	<label> </label><input type="email" name="mail" placeholder = "Adresse email " size ="30"/>
                	<label> </label><input type="email" name="mail2" placeholder = "Confirmation adresse email " size ="30"/>


                    <label> </label><input type="password" name="password" placeholder = "Confirmation Mot de passe " size ="30"/>
                    <label> </label> <input type ="password" name ="password2" placeholder = "Mot de passe "size ="30"/>
                    <label> </label><input type="text" name="codepost" placeholder = "Code postal " size ="30"/>


                    <label> </label><input type="text" name="ville" placeholder = "Ville " size ="30"/>
                    <label> </label><input type="text" name="rue" placeholder = "Rue " size ="30"/>
                    <label> </label><input type="text" name="numrue" placeholder = "Numero de rue " size ="30"/>

                </p>
            </form>


            <p class = "mdp" > Mon adresse n'apparait pas</p>


            <div class = "alignement">
                <input type="submit" class = "connexion" value = "S'inscrire"> <br />
            </div>

            <a>En cliquant sur S'inscrire, vous acceptez les </a>

            <a id="cond" href="CGA">  conditions generales d'utilisations </a>
                
        </nav>

    
    </body>
</html>