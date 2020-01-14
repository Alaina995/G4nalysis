<?php
session_start();  // démarrage d'une session

// on vérifie que les données du formulaire sont présentes
if (isset($_POST['pseudo']) && isset($_POST['passe'])) {
    require 'fonctions.php';
    $bdd = getBdd();
    // cette requête permet de récupérer l'utilisateur depuis la BD
    $requete = "SELECT * FROM users WHERE mail=? AND password=?";
    $resultat = $bdd->prepare($requete);
    $login = $_POST['pseudo'];
    $mdp = $_POST['passe'];
    $resultat->execute(array($login, $mdp));
    if ($resultat->rowCount() == 1) {
        // l'utilisateur existe dans la table
        // on ajoute ses infos en tant que variables de session
        $_SESSION['mail'] = $login;
        $_SESSION['password'] = $mdp;
        // cette variable indique que l'authentification a réussi
        $authOK = true;
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Connexion</title>
</head>
<body>
    <h1>Résultat de l'authentification</h1>
    <?php
    if (isset($authOK)) {
        echo "<p>Bienvenue, " . escape($login) . "</p>";
        echo '<a href="/G4nalysis/Dash board/dashboard.php">Poursuivre vers la page d\'accueil</a>';
    }
    else { ?>
        <p>Impossible de poursuivre la connexion : Utilisateur non reconnu</p>
        <p><a href="index.php">Nouvel essai</p>
    <?php } ?>
</body>
</html>