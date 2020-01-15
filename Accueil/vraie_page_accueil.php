<php?

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
    		<li><a id="nav_connection" href="../Se_connecter/se_connecter.html">Se connecter</a></li>
            <li><a id="nav_inscription" href="../Inscription/Inscription.html">S'inscrire</a></li>
            <li><a id="nav_invite" href="Page 2.html">Invité</a></li>
    		
    		
        </ul>
        
        <img  id="nav_logo" src="G4analysis.png"/>


    <img id="careImg" src="4care.png" alt="logo"/>

    <h2>Votre santé à portée de <br>main</h2>

    <h3>Le Tout-en-un qui prend soin de vous</h3>
    <h4>Effectuez vos mesures depuis chez vous et envoyez les résultats à un médecin proche de vous</h4>


    
      <button type="button" onclick="toggle_text();">En savoir plus</button>
      
      <span id="span_txt"> </span>

<script type="text/javascript">
 
 function toggle_text() {
  var span = document.getElementById("span_txt");
  if(span.innerHTML != "") {
    span.innerHTML = "";
  } else {
    span.innerHTML = "Nous sommes une jeune start-up crée en 2018 et nous développons des solutions techniques pour nos clients. Nous sommes composée de 6 collaborateurs et l’année dernière nous avons réalisé un chiffre d’affaire de 500.000€.";
  }
}
</script>    


    </body>
</html>

</php