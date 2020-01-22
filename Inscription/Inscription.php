<?php
    session_start();

    ?>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Inscription.css" />
        <title> Inscription </title>
        <form action="postinscription.php" method="post"></form>
    </head>
    <body>

        <img  id="logo" src="G4analysis.png"/>
            
        <a id = "retouracc" href="../Accueil/vraie_page_accueil.php"><< Retour à l'accueil
        </a>

        <script src="traitement.js"></script>
        
        <nav>
            <p class = "titre"> Inscription</p>
            <img  id="care" src="4Care.png"/>
            <img  id="barre" src ="Barre_separation.png"/>

            <form method="POST" action="postinscription.php" onsubmit="return confirmBoxProfil()">    
                <p>
                    <label>Nom</label><input maxlength="15" type="text" name="nom" id="id" placeholder = "Nom " size ="30" required = "required" value="<?php if(isset($_COOKIE['nom'])){ echo $_COOKIE['nom'];} ?>">
                    <div class="erreur">
                        <?php

                            if(isset($_SESSION['nom'])){
                            echo $_SESSION['nom'];
                            }

                        ?>
                    </div>


                    <label>Prénom</label><input maxlength="15" type="text" name="prenom" id="prenom" placeholder = "Prenom " size ="30" required = "required" value="<?php if(isset($_COOKIE['prenom'])){ echo $_COOKIE['prenom'];} ?>">

                    <div class="erreur">
                        <?php
                        
                            if(isset($_SESSION['prenom'])){
                            echo $_SESSION['prenom'];
                        }

                        ?>
                    </div>

                    <br />

                    <label>e-mail</label><input maxlength="30" type="email" name="email" placeholder = "Adresse email " size ="30" required = "required" id="email1" onfocus="color(this)" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email'];} ?>">

                    <div class="erreur">
                    <?php
                    
                        if(isset($_SESSION['email'])){
                        echo $_SESSION['email'];
                    }

                    ?>
                    </div>

                    <label>Confirmation e-mail </label><input maxlength="30" type="email"  placeholder = "Confirmation adresse email " size ="30"  required = "required" id="email2" name="emailConfirmation" onfocus="verificationEmail()" value="<?php if(isset($_COOKIE['emailConfirmation'])){ echo $_COOKIE['emailConfirmation'];} ?>"> 

                    <div class="erreur">
                    <?php
                    
                        if(isset($_SESSION['emailConfirmation'])){
                        echo $_SESSION['emailConfirmation'];
                    }

                    ?>
                    </div>

                    <br />

                    <label>Mot de passe</label><input maxlength="20" type="password" name="motdepasse" placeholder = "Mot de passe" size ="30"   id="motdepasse" required = "required" onfocus="color(this)" value="<?php if(isset($_COOKIE['motdepasse'])){ echo $_COOKIE['motdepasse'];} ?>">

                    <div class="erreur">
                    <?php
                    
                        if(isset($_SESSION['motdepasse'])){
                        echo $_SESSION['motdepasse'];
                    }

                    ?>
                    </div>

                    <label>Confirmation Mot de passe</label> <input maxlength="20" type ="password" name ="motdepasseConfirmation" placeholder = "Confirmation Mot de passe "size ="30" required = "required" id="motdepasseConfirmation"  onfocus="verificationPassword()" value="<?php if(isset($_COOKIE['motdepasseConfirmation'])){ echo $_COOKIE['motdepasseConfirmation'];} ?>">

                    <div class="erreur">
                    <?php
                    
                        if(isset($_SESSION['motdepasseConfirmation'])){
                        echo $_SESSION['motdepasseConfirmation'];
                    }

                    ?>
                    </div>

                    <label>Ville</label><input maxlength="30" type="text" name="Ville" placeholder = "Ville" size ="30"   id="Ville" value="<?php if(isset($_COOKIE['Ville'])){ echo $_COOKIE['Ville'];} ?>">

                    <div class="erreur">
                        <?php
                        
                            if(isset($_SESSION['Ville'])){
                            echo $_SESSION['Ville'];
                        }

                        ?>
                    </div>

                    <br />

                    <label>Code postal</label><input maxlength="5" type="text" name="codepo" placeholder = "Code postal " size ="30" required = "required" /id="CP" value="<?php if(isset($_COOKIE['codepo'])){ echo $_COOKIE['codepo'];} ?>">

                    <div class="erreur">
                        <?php
                        
                            if(isset($_SESSION['codepo'])){
                            echo $_SESSION['codepo'];
                        }

                        ?>
                    </div>

                    <label>Rue </label><input maxlength="30" type="text" name="rue" placeholder = "Rue " size ="30" required = "required" / id="rue" value="<?php if(isset($_COOKIE['rue'])){ echo $_COOKIE['rue'];} ?>">

                    <div class="erreur">
                        <?php
                        
                            if(isset($_SESSION['rue'])){
                            echo $_SESSION['rue'];
                        }

                        ?>
                    </div>

                    <label>Numéro de rue</label><input maxlength="20" type="text" name="nrue" placeholder = "Numéro de rue " size ="30" required = "required" / id="nrue" value="<?php if(isset($_COOKIE['nrue'])){ echo $_COOKIE['nrue'];} ?>">

                    <div class="erreur">
                        <?php
                        
                            if(isset($_SESSION['nrue'])){
                            echo $_SESSION['nrue'];
                        }

                        ?>
                    </div>

                </p>
                <input type="submit" nom ="formsend" value="S'inscrire" class = "connexion" id="formsend" href="../Dash board/dashboard.php">

            </form>

            <a href="../Nous_contacter/nous_contacter.php" class = "mdp" > Mon adresse n'apparait pas <a/>

            <br />
            <br />


            <!--<div class = "alignement">
                <div class = "alignement"><a href="../Dash board/dashboard.php" >S'inscrire</a>-->


            <br /><br />
            

            <a> En cliquant sur S'inscrire, vous acceptez </a>
            <a href="../CGU/CGU.php"> les conditions générales d'utilisations </a><br /><br />

            <img  id="barre" src ="Barre_separation.png"/><br />

            <a id="vous">Vous avez déjà un compte?</a>
            <a id="connect" href="../Se_connecter/index.php"> Connectez-vous</a><br /><br />
                
        </nav>
    </body>
</html>
