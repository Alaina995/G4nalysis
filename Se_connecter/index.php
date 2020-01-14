<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="se_connecter.css" />
        <title> se connecter </title>
    </head>
<body>
        <form action="postconnexion.php" method="post">
        <img  id="wave" src="Waves.png"/>
        <div class="linear-gradient"></div>
        <img  id="logo" src="G4analysis.png"/>
        
    
        <p class = "titre">  Connexion</p>

        <nav>

            <img  id="care" src="4Care.png"/>
            <img  id="barre" src ="Barre_separation.png"/>

            <form >
                <p>
                    <label> </label><input type="email" name="pseudo" id="pseudo" placeholder = "Adresse email " size ="30"/>
                    
                    <label> </label> <input type ="password" name ="passe" id="passe" placeholder = "Mot de passe "size ="30"/>
                </p>
            </form>


            <p class = "mdp" > Mot de passe oublié?</p>


            <div class = "alignement">
                <input type="checkbox" name="resteco" placeholder = "Rester connecté" size ="12" />
                <label  class = "resteco" for="scales">Rester connecté</label>
                <input type="submit" class = "connexion" value="Se connecter">
            </div>
                

            <button class = "inscrip"> S'inscrire maintenant </button>
        </nav>

    
    </body>
</html>