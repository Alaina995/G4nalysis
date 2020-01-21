<html>
	<head>
		<title>Nous contacter</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="nous_contacter.css"/>
		<?php session_start();?>
		<script type="text/javascript" src="nous_contacter.js"></script>
	</head>

	<body>
        <a id = "retouracc" href="../Accueil/vraie_page_accueil.php"><< Retour à l'accueil
        </a>
		<section id="hire">
	    
	    		<h1>Contactez Nous</h1>
	    
	    <form>
		      <div class="field name-box">
			        <input type="text" id="name" placeholder="Quel est votre nom?"/ required>
	        		<label for="name">Nom</label>
			        <span class="ss-icon">check</span>
		      </div>

		      <div class="field email-box">
			        <input type="email" id="email" placeholder="votre_email@email.com"/ required="">
			        <label for="email">Email</label>
			        <span class="ss-icon">check</span>
		      </div>

		      <div class="field msg-box">
			        <textarea id="msg" rows="4" placeholder="Ecrivez votre message ici..."/ required></textarea>
			        <label for="msg">Message</label>
			        <span class="ss-icon">check</span>
		      </div>

		      <input class="button" type="submit" value="Send" />
	  </form>
	</section>

	</body>

	<?php require('../Footer/footer.php'); ?>
</html>
