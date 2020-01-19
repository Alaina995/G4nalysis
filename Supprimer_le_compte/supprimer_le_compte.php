<html>
	<head>
		<title>Supprimer le compte</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="supprimer_le_compte.css"/>
		<?php session_start();?>
	</head>

	<body>
          
		<div id="Supprimer_compte" align="center">

			<h1>Voulez-vous vraiment supprimer votre compte?</h1><br /><br />

			<p>Cette action est irréversible, et toutes les données non téléchargées seront supprimées.</p><br />

			 <label>
			    <input class="input" type="checkbox" id="taste_1" name="taste_cherry" style="font-size:smaller ;"> Je comprends que mes données seront supprimées après avoir cliqué sur le bouton 'Supprimer mon compte', et ne seront ainsi plus disponibles
			</label><br /><br /><br />

		</div>

        <div class = "alignement">
                <li><a href="modifier_profil_1.html" class = "button1">Annuler</button></a>
                <li><a href="compte_sup.html" class = "button2">Enregistrer</button></a>
		</div>
		
		<?php require('../Footer/footer.php'); ?>

    	<?php $title = 'Profil'; ?>
		<?php $currentPage = 'profil'; ?>
    	<?php require('../Nav_Bar_Website/nav_bar_principale.inc.php'); ?>

	</body>
</html>