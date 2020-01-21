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
            document.getElementById('titre').innerHTML = "Test visuel en cours ...";
            }, 12000)
    }

    