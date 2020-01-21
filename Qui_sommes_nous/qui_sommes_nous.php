<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="qui_sommes_nous.css" />
        <title>Qui sommes-nous ?</title>
        <?php session_start();?>
    </head>
    <body>

      <a id = "retouracc" href="../Accueil/vraie_page_accueil.php"><< Retour à l'accueil
      </a>
      
      <div id="conteneur">
    	<h1> Qui sommes-nous ? </h1>
    	<p class="texte"> Nous sommes une jeune start-up crée en 2018 et nous développons des solutions techniques pour nos clients. Nous sommes composée de 6 collaborateurs et l’année dernière nous avons réalisé un chiffre d’affaire de 500.000€. Nous proposons une solution d'avenir pour faire face aux probèmes. La solution comprend un boîtier composé des différents capteurs pour les analyses et un site web (vous êtes actuellement dessus) qui permet de visualiser les résultats et de contacter un médecin en cas de besoin. Notre boitier est capable de faire les actions suivantes : 
       </p>
       <ul class="liste">
            <li> Mesure de la fréquence cardiaque </li>
            <li> Mesure de la température corporelle de la peau </li>
            <li> Test de l’étendue auditive </li>
            <li> Test de reconnaissance de tonalité </li>
            <li> Test de réflexe visuel </li>
       </ul>  
      </div>
    </body>
  <?php require('../Footer/footer.php'); ?> 
</html>  



