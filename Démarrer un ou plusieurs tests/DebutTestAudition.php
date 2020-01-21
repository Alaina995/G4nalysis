<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="demarrerTestC.css" />
        <title> démarrer test d'audition </title>
    </head>

<h1 id = "titre"> Démarrer le test d'audition  </h1>

<nav>

<p class = "descrip">Vous avez choisi d'effectuer le test d'audition avec votre appareil 4Care©.</p>
<img  id="barre" src ="Barre_separation.png"/>
<h1 class = "typeTest" >Test d'audition </h1>
<p class = "instructions" >Instructions</p>
<p class = "descripInstructions"> Instructions nécéssaires au bon déroulement du test.</p>
<div id="timer"> </div>
<a id = "bouton" ><img id ="fleche_blanche" src ="fleche_blanche.png"></a>

</nav>


<script>
    document.getElementById("bouton").onclick = function() {myFunction ()};

    function myFunction(){
        document.getElementById('timer').style.display='block';
        var timerElt = document.getElementById('timer');
    
        var counter = 10; 

        var timer = setInterval(function(){
        timerElt.innerText = "Le test va commencer dans " +counter+ " secondes"; 
        counter --;

        if (counter ===-1){
            clearInterval(timer);
        }
        
        },1000);

        setTimeout(function(){
            document.getElementById('timer').style.display='none';
            document.getElementById('titre').innerHTML = "Test d'audition en cours ...";
            }, 12000)
    }

    
</script>

</body>
</html>