<html>
	<head>
		<title>Modifier son profil</title>
		<meta charset="uft-8">
		<link rel="stylesheet" href="modifier_profil_1.css"/>
	</head>
	<body>

		<img id="wave" src="Waves.png"/>

		<br /><br /><br /><br />

		<div id="formulaire" align="center">

			<form method="post"  action="Ma_page_de_traitement">
					<h1>Modifier mon profil</h1>

					<img src="icone_user.png" alt="icone_user"><br />
			       	<button id="changpho"> 
			       		<h2>Changer de photo</h2>
			       	</button><br /><br />

				    <input type="text" style="width: 250px; id="name" placeholder="Prenom"><br />

				    <input type="text" style="width: 250px; name="user_surname" placeholder="Nom"><br /><br />


			       	<input type="email" style="width: 250px; id="mail" placeholder="Ancienne adresse mail"><br />

			       	<input type="email" style="width: 250px; id="new_mail" placeholder="Nouvelle adresse mail"><br />

			       	<input type="email" style="width: 250px; id="new_mail" placeholder="Confirmation mail"><br /><br />


			        <input type="password" style="width: 250px; id="password" placeholder="Ancien Mot de passe"><br />

			        <input type="password" style="width: 250px; id="new_password" placeholder="Nouveau Mot de passe"><br />


			        <input type="password" style="width: 250px; "id="new_password" placeholder="Confirmation Mot de passe"><br /><br />

					<a href="modifier_mon_adresse.html"> Changer mon adresse!</a><br /><br />

				    <a href="supprimer_le_compte.html"> Supprimer le compte? </a><br /><br />
				    <button id="buttonEn">Enregistrer</button>
			</form>
		</div>
		<?php $title = 'Profil'; ?>
		<?php $currentPage = 'profil'; ?>
    	<?php require('../Nav_Bar_Website/nav_bar_principale.inc.php'); ?>
	</body>
</html>