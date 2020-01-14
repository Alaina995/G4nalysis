
<div class="linear-gradient"></div>
<ul class="nav_bar">
    <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>>
        <a <?php if ($currentPage === 'Home') { echo 'href="#"'; } 
        else { echo 'href="/site/G4nalysis/Dash board/dashboard.php"'; } ?>>
            <div class="ligne">
                <img src="\site\G4nalysis\Nav_Bar_Website\Nav_bar_images\home-icon-png-round-7.png" />
                Accueil
            </div>
        </a>
    </li>
    <li <?php if ($currentPage === 'demarer') {echo 'class="active"';} ?>>
        <a <?php if ($currentPage === 'demarer') { echo 'href="#"'; } 
        else { echo 'href="/site/G4nalysis/Dash board/dashboard.php"'; } ?>>
            <div class="ligne">
                <img class="link" src="\site\G4nalysis\Nav_Bar_Website\Nav_bar_images\start-button-icon-png-16.png" alt="Profile picture" />
                Démarer un test
            </div>
        </a>
    </li>
    <li <?php if ($currentPage === 'tests') {echo 'class="active"';} ?>>
        <a <?php if ($currentPage === 'tests') { echo 'href="#"'; } 
        else { echo 'href="/site/G4nalysis/Dash board/dashboard.php"'; } ?>>
            <div class="ligne">
                <img class="link" src="\site\G4nalysis\Nav_Bar_Website\Nav_bar_images\Experiment_Results-512.png" alt="Profile picture" />
                Tests
            </div>
        </a>
    </li>
    <li <?php if ($currentPage === 'statistiques') {echo 'class="active"';} ?>>
        <a <?php if ($currentPage === 'statistiques') { echo 'href="#"'; } 
        else { echo 'href="/site/G4nalysis/Dash board/dashboard.php"'; } ?>>
            <div class="ligne">
                <img class="link" src="\site\G4nalysis\Nav_Bar_Website\Nav_bar_images\87578.png" alt="Profile picture" />
                Statistiques
            </div>
        </a>
    </li>
    <li <?php if ($currentPage === 'profil') {echo 'class="active"';} ?>>
        <a <?php if ($currentPage === 'profil') { echo 'href="#"'; } 
        else { echo 'href="/site/G4nalysis/Modifier_Profil/modifier_profil_1.php"'; } ?>>
            <div class="ligne">
                <img class="link" src="\site\G4nalysis\Nav_Bar_Website\Nav_bar_images\profile-picture-icon-0.png" alt="Profile picture" />
                Profil
            </div>
        </a>
    </li>
    <li class="button_parametres" >
        <a >
            <div class="ligne">
                <img class="link" src="\site\G4nalysis\Nav_Bar_Website\Nav_bar_images\profile-picture-icon-0.png" alt="Profile picture" />
                Paramètres
            </div>
        </a>
    </li>
    <li class="button_langue">
        <a href="Page 2.html">
            <div class="ligne">
                <img class="link" src="\site\G4nalysis\Nav_Bar_Website\Nav_bar_images\language.png" alt="Profile picture" />
                Changer la langue
            </div>
        </a>
    </li>
</ul>




<ul class="nav_bar_horizon">


    <li><a id="nav_deconnexion" href="Page 2.html">Se déconnecter</a></li>
    <li><img  id="nav_menu_bar" src="\site\G4nalysis\Nav_Bar_Website\Nav_bar_images\Menu_Bar-512.png"/></li>
    <li id="bienvenue"><p>Bienvenue, Rafael</p></li>
    <li id="logo_li"><img  id="nav_logo" src="\site\G4nalysis\Nav_Bar_Website\Nav_bar_images\G4analysis.png"/></li>
    
</ul>
