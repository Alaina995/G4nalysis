<?php 
    session_start();
    require '../Se_connecter/fonctions.php';


    if(empty($_POST['nom'])){
        $_SESSION['nom'] ="Merci de remplir votre nom";
    }

    else{
        $_SESSION['nom'] = "";
        setcookie('nom',$_POST['nom'], time() + (90000 *30), "/");
    }

    if(empty($_POST['prenom'])){
        $_SESSION['prenom'] ="Merci de remplir votre prenom";
    }

    else{
        $_SESSION['prenom'] = "";
        setcookie('prenom',$_POST['prenom'], time() + (90000 *30), "/");
    }

    if(empty($_POST['email']) OR ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $_SESSION['email'] ="Merci de remplir votre email";
    }

    else{
        $_SESSION['email'] = "";
        setcookie('email',$_POST['email'], time() + (90000 *30), "/");
    }

    if(empty($_POST['emailConfirmation']) OR ! filter_var($_POST['emailConfirmation'], FILTER_VALIDATE_EMAIL)){
        $_SESSION['emailConfirmation'] ="Merci de remplir votre email de confirmation";
    }

    else{
        $_SESSION['emailConfirmation'] = "";
        setcookie('emailConfirmation',$_POST['emailConfirmation'], time() + (90000 *30), "/");
    }

    if(empty($_POST['emailConfirmation']) OR ! filter_var($_POST['emailConfirmation'], FILTER_VALIDATE_EMAIL)){
        $_SESSION['emailConfirmation'] ="Merci de remplir votre email de confirmation";
    }

    else{
        $_SESSION['emailConfirmation'] = "";
        setcookie('emailConfirmation',$_POST['emailConfirmation'], time() + (90000 *30), "/");
    }

    if(empty($_POST['motdepasse'])){
        $_SESSION['motdepasse'] ="Merci de remplir votre mot de passe";
    }

    else{
        $_SESSION['motdepasse'] = "";
        setcookie('motdepasse',$_POST['motdepasse'], time() + (90000 *30), "/");
    }

    if(empty($_POST['motdepasseConfirmation'])){
        $_SESSION['motdepasseConfirmation'] ="Merci de confirmer votre mot de passe";
    }

    else{
        $_SESSION['motdepasseConfirmation'] = "";
        setcookie('motdepasseConfirmation',$_POST['motdepasseConfirmation'], time() + (90000 *30), "/");
    }

    if(empty($_POST['Ville'])){
        $_SESSION['Ville'] ="Merci de remplir votre Ville";
    }

    else{
        $_SESSION['Ville'] = "";
        setcookie('Ville',$_POST['Ville'], time() + (90000 *30), "/");
    }

    if(empty($_POST['codepo'])){
        $_SESSION['codepo'] ="Merci de remplir votre code postale";
    }

    else{
        $_SESSION['codepo'] = "";
        setcookie('codepo',$_POST['codepo'], time() + (90000 *30), "/");
    }

    if(empty($_POST['rue'])){
        $_SESSION['rue'] ="Merci de remplir votre rue";
    }

    else{
        $_SESSION['rue'] = "";
        setcookie('rue',$_POST['rue'], time() + (90000 *30), "/");
    }

    if(empty($_POST['nrue'])){
        $_SESSION['nrue'] ="Merci de remplir votre numero de rue";
    }

    else{
        $_SESSION['nrue'] = "";
        setcookie('nrue',$_POST['nrue'], time() + (90000 *30), "/");
    }


    if (empty($_POST['nom'])||empty($_POST['prenom'])||empty($_POST['email'])||empty($_POST['emailConfirmation'])||empty($_POST['motdepasse'])||empty($_POST['motdepasseConfirmation'])||empty($_POST['Ville'])||empty($_POST['codepo'])||empty($_POST['rue'])||empty($_POST['nrue'])){

        header("Location:Inscription.php");
    }

    else{
        $conn = new mysqli("localhost", "g4nalysis_users", "secret", "g4nalysis2");
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "INSERT INTO users (id, nom, prenom, mail, password, codepostal, ville, rue, numerorue, dateCreation) VALUES (NULL, '".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['emailConfirmation']."', md5('".$_POST['motdepasseConfirmation']."'), '".$_POST['codepo']."', '".$_POST['Ville']."', '".$_POST['rue']."', '".$_POST['nrue']."', 'current_timestamp()')";

      if ($conn->query($sql) === TRUE) {
          echo "Utilisateur bien créé";
        echo"Vous avez bien rempli le formulaire!";
      }
    session_destroy();
    }
?>

