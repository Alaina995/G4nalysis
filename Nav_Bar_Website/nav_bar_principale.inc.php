
<div class="linear-gradient"></div>
<ul class="nav_bar">
    <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>>
        <a <?php if ($currentPage === 'Home') { echo 'href="#"'; } 
        else { echo 'href="../Dash board/dashboard.php"'; } ?>>
            <div class="ligne">
                <img src="../Nav_Bar_Website/Nav_bar_images/home-icon-png-round-7.png" />
                Accueil
            </div>
        </a>
    </li>
    <li <?php if ($currentPage === 'tests') {echo 'class="active"';} ?>>
        <a <?php if ($currentPage === 'tests') { echo 'href="#"'; } 
        else { echo 'href="../Mes_resultats/mes_resultats.php"'; } ?>>
            <div class="ligne">
                <img class="link" src="../Nav_Bar_Website/Nav_bar_images/Experiment_Results-512.png" alt="Profile picture" />
                Mes résultats
            </div>
        </a>
    </li>
    <li <?php if ($currentPage === 'statistiques') {echo 'class="active"';} ?>>
        <a <?php if ($currentPage === 'statistiques') { echo 'href="#"'; } 
        else { echo 'href="../Graphic/statistiques.php"'; } ?>>
            <div class="ligne">
                <img class="link" src="../Nav_Bar_Website/Nav_bar_images/87578.png" alt="Profile picture" />
                Statistiques
            </div>
        </a>
    </li>
    <li <?php if ($currentPage === 'profil') {echo 'class="active"';} ?>>
        <a <?php if ($currentPage === 'profil') { echo 'href="#"'; } 
        else { 
                      // Destruction des variables de sessions inutiles
          
          unset($_SESSION['nomErreur']);
          unset($_SESSION['prenomErreur']);
          unset($_SESSION['passwordErreur2']);
          unset($_SESSION['passwordErreur1']);
          unset($_SESSION['passwordErreur2']);
          unset( $_SESSION['emailErreur']);
            
            echo 'href="../Modifier_Profil/modifier_profil_1.php"'; } ?>>
            <div class="ligne">
                <img class="link" src="../Nav_Bar_Website/Nav_bar_images/profile-picture-icon-0.png" alt="Profile picture" />
                Profil
            </div>
        </a>
    </li>
    <li class="button_parametres" >
        <a >
            <div class="ligne">
                <img class="link" src="../Nav_Bar_Website/Nav_bar_images/settings.png" alt="Profile picture" />
                Paramètres
            </div>
        </a>
    </li>
    <li class="button_langue">
        <a href="Page 2.html">
            <div class="ligne">
                <img class="link" src="../Nav_Bar_Website/Nav_bar_images/language.png" alt="Profile picture" />
                Changer la langue
            </div>
        </a>
    </li>
</ul>

<?php
    require_once '../Se_connecter/fonctions.php';
    if(!isset($prenomUser)){
        $prenomUser = $_SESSION['prenomUser'];
    }
    if(!isset($donnesUser)){
        $donnesUser = $_SESSION['donnesUser'];
    }
    

    $bdd = getBdd();


		
     ?>

<ul class="nav_bar_horizon">


    <li><button id="nav_deconnexion" onClick="confirmBox()" >Se déconnecter</button></li>
    <!-- <li>  
        <form method="POST" action="../Nav_Bar_Website/logout.php" onsubmit="return confirmBox()">
            <input type="submit" id="nav_deconnexion"  value="Se déconnecter">
        </form>
    </li> -->
    <li><img  id="nav_menu_bar" src="../Nav_Bar_Website/Nav_bar_images/Menu_Bar-512.png"/></li>
    <li id="bienvenue"><p>Bienvenue, <?php echo "" . escape($prenomUser) ;?></p></li>
    <li id="logo_li"><img  id="nav_logo" src="../Nav_Bar_Website/Nav_bar_images/G4analysis.png"/></li>
    
</ul>
<script src="../Nav_Bar_Website/traitement.js"></script>
