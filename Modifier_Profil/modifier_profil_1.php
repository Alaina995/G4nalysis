<html>
	<head>
		<title>Modifier son profil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="modifier_profil_1.css"/>
	</head>

	<body>

<<<<<<< HEAD
		<img  id="wave" src="Waves.png"/>
=======
		<!-- <img  id="wave" src="Waves.png"/> -->
>>>>>>> 1829eb4301c3a21883bfc427bb3b936c561bfa46

        <ul class="nav_bar">
            <li>
                <a href="Page 2.html">
                    <div class="ligne">
                        <img src="home-icon-png-round-7.png" />
                        Accueil
                    </div>
                </a>
            </li>
            <li>
                <a href="Page 2.html">
                    <div class="ligne">
                        <img class="link" src="start-button-icon-png-16.png" alt="Profile picture" />
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
            <li>
                <a href="Page 2.html">
                    <div class="ligne">
                        <img class="link" src="87578.png" alt="Profile picture" />
                        Statistiques
                    </div>
                </a>
            </li>
            <li>
                <a href="Page 2.html">
                    <div class="ligne">
                        <img class="link" src="profile-picture-icon-0.png" alt="Profile picture" />
                        Profil
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


            <li><a id="nav_deconnexion" href="Page 2.html">Se déconnecter</a></li>
            <li><img  id="nav_menu_bar" src="Menu_Bar-512.png"/></li>
            <li id="bienvenue"><p>Bienvenue, Rafael</p></li>
            <li id="logo_li"><img  id="nav_logo" src="G4analysis.png"/></li>
            
        </ul>

        <br />
        <br />
            

        

		<nav>
			<h1>Modifier mon profil</h1>

			<img src="icone_user.png" alt="icone_user"><br />
            <div class = "changpho">
                <a href="#" class = "chang">Changer de photo</a>
            </div>  

            <form >
			    <p>

					<label> </label><input type="text" name="pseudo" placeholder = "Nom " size ="30"/><br />
                	<label> </label><input type="text" name="pseudo" placeholder = "Prenom " size ="30"/><br />

                	<br />

                	<label> </label><input type="email" name="email" placeholder = "Ancienne adresse mail " size ="30"/><br />
                	<label> </label><input type="email" name="email" placeholder = "Nouvelle adresse mail " size ="30"/><br />
                	<label> </label><input type="email" name="email" placeholder = "Confirmation adresse email " size ="30"/><br />


                	<br />

                    <label> </label><input type="password" name="motdepasse" placeholder = "Ancien Mot de passe " size ="30"/><br />
                    <label> </label> <input type ="password" name ="motdepasse" placeholder = "Nouveau Mot de passe "size ="30"/><br />
                    <label> </label><input type="password" name="motdepasse" placeholder = "Confirmation Mot de passe" size ="30"/><br />

                </p>
            </form>


	        <a href="../Modifier_Adresse_2.0/modifier_mon_adresse.php" class="a_chan"> Changer mon adresse </a><br />

	        <a href="../Supprimer le compte - V2/supprimer_le_compte.php" class="a_sup"> Supprimer le compte? </a><br /><br />


	        <div class = "alignement">
   				<a href="dashboard.html" class= "connexion">Enregistrer</a>
	        </div>

	        <p>   </p>
    	</nav>	

<<<<<<< HEAD
    <?php $title = 'modifier profil'; ?>
	<?php $currentPage = 'modifier profil'; ?>
=======
    	<?php $title = 'Profil'; ?>
		<?php $currentPage = 'profil'; ?>
    	<?php require('../Nav_Bar_Website/nav_bar_principale.inc.php'); ?>

>>>>>>> 1829eb4301c3a21883bfc427bb3b936c561bfa46


	</body>
</html>