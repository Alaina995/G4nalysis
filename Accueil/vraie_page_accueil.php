<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vraie_page_accueil.css" />
        <title>G4nalysis</title>
    </head>

    <body>

    	<ul class="nav_bar_horizon">
            <li><img  id="nav_menu_bar" src="Menu_Bar-512.png"/></li>
    		<li><a id="nav_connection" href="../Se_connecter/index.php">Se connecter</a></li>
            <li><a id="nav_inscription" href="../Inscription/Inscription.php">S'inscrire</a></li>
            <li><a id="nav_invite" href="../Invite/invite_dashboard.php">Invité</a></li>
    		
    		
        </ul>
        
        <img  id="nav_logo" src="G4analysis.png"/>


    <img id="careImg" src="4care.png" alt="logo"/>

    <h2>Votre santé à portée de <br>main</h2>

    <h3>Le Tout-en-un qui prend soin de vous</h3>
    <h4>Effectuez vos mesures depuis chez vous et envoyez les résultats à un médecin proche de vous</h4>



   <a id="ancre" href="#mon_ancre">En savoir plus</a>
   


   
  
  <h5 id="mon_ancre"></h5>
  <img id="boitier" src="boitier.jpg" class="picture-left">
 
  <div class="paragraph-right">
    
    <p> Le boitier vous permet de mesurer votre température corporelle de manière précise.</p>
    
  </div>
  

  <img id="boitier" src="boitier.jpg" class="picture-right">
  <div class="paragraph-left">
    <p> Le boitier vous permet de mesurer votre fréquence cardiaque de manière précise.</p>
  </div>

  <img id="boitier" src="boitier.jpg" class="picture-left1">
  <div class="paragraph-right1">
    <p> Le boitier vous permet de tester votre qualité de reconnaissance de tonalité de manière précise.</p>
  </div>

  <img id="boitier" src="boitier.jpg" class="picture-right1">
  <div class="paragraph-left1">
    <p> Le boitier vous permet de tester votre étendue auditive 
 de manière précise.</p>
  </div>



    
      <!--<button type="button" onclick="toggle_text();">En savoir plus</button>
      
      <span id="span_txt"> </span>

<script type="text/javascript">
 
 function toggle_text() {
  var span = document.getElementById("span_txt");
  if(span.innerHTML != "") {
     span.innerHTML = "";
  } else {
    span.innerHTML =  "<br> Vous pouvez découvrir les différentes fonctionnalités ci-dessous ";
  }
}
</script>   



<script type="text/javascript">

  function ChangeImageTxt(divId,imageNom,imgTexte){
    var divId; /* id du div qui va contenir la grande image */
    var imageNom; /* nom de la grande image */
    var imgTexte; /* texte sous la grande image */
    var imageRep = './Accueil/'; /* repertoire contenant les images (pour ne pas avoir à l'écrire à chaque fois dans la fonction */
    /* on met l'image dans le div */
    var contenuhtml = '<img src="'+imageRep+imageNom+'" alt="" onclick="ViderDiv(\'div-photo\');" />';
    contenuhtml += '<p>'+imgTexte+'</p>';
    document.getElementById(divId).innerHTML = contenuhtml;
  } 
  /* fonction : vidage du contenu d'un div */
  function ViderDiv(divId){
    var divId; /* id du div à vider */
    /* on vide le div */
    document.getElementById(divId).innerHTML = '';
  } 
  </script>

  <div id="div-pictos">
  <ul>
    <li>
      <img src="./Accueil/boitier.jpg" onclick="ChangeImageTxt('div-photo','boitier.jpg','Un texte un peu bateau qui décrit la fonctionnalité présentée sur la photo');" alt="" />
    </li>
    <li>
      <img src="./Accueil/boitier.jpg" onclick="ChangeImageTxt('div-photo','boitier.jpg','Un texte un peu bateau qui décrit la fonctionnalité présentée sur la photo');" alt="" />
    </li>
  </ul>
  </div>-->
  

 
  

    </body>
<?php require('../Footer/footer.php'); ?>
    <script src="scroll.js"></script>
</html>