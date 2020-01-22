<?php
  session_start();  

  $nom = $_POST['nom'];
  $prenom =  $_POST['prenom'];
  $email1 = $_POST['email1'];
  $email2 = $_POST['email2'];
  $oldPassword = $_POST['oldPassword'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];

  
  //bdd et SQL
  require '../Se_connecter/fonctions.php';

  //Récupération des données de l'utilisateur
  $donnesUser = $_SESSION['donnesUser'];


  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    $donneesOk = true;


    // Le nom est-il rempli ?
    if(!empty($nom))
    {
      $newNom = $nom;
    }else{
      $nomErreur = 'Veuillez indiquer votre nom svp !';
      $donneesOk = false;
    }



      // Le prenom est-il rempli ?
    if(!empty($prenom))
    {
      $newPrenom = $prenom;
    }else{
      $prenomErreur = 'Veuillez indiquer votre prenom svp !';
      $donneesOk = false;
    }


// Adresse mail
    if(!empty($email2) && !empty($email1) && $email2 == $email1)
    {
      $newMail= $email2;
    }else if ($email2 != $email1)
    {
      $emailErreur = 'Les adresses mail ne correspondent pas !';
      $donneesOk = false;
    }
    else{
      $newMail = $donnesUser['mail'];
    }

// Mot de passe
    if(!empty($oldPassword))
    { 
      if(md5($oldPassword) == $donnesUser['password'])
      {
        if(!empty($password1) && !empty($password2) && $password1 == $password2)
        {
          $newPassword = $password2;
        }else{
          $passwordErreur2 = "Les mots de passe ne correspondent pas entre eux";
          $donneesOk = false;
        }
      }else
      {
        $passwordErreur1 = 'Le mot de passe entré est incorrect';
        $donneesOk = false;
      }
    }else if (!empty($password1) || !empty($password2))
    {
      $passwordErreur2 = "Veuillez d'abord rentrer votre mot de passe actuel";
      $donneesOk = false;
    }else{
      $newPassword = $donnesUser['password'];
    }


    if (!$donneesOk)
    {
      $_SESSION['nomErreur'] = $nomErreur;
      $_SESSION['prenomErreur'] = $prenomErreur;
      $_SESSION['passwordErreur2'] = $passwordErreur2;
      $_SESSION['passwordErreur1'] = $passwordErreur1;
      $_SESSION['passwordErreur2'] = $passwordErreur2;
      $_SESSION['emailErreur'] = $emailErreur;

      header("Location:modifier_profil_1.php");
    }
    else
    {
      // L'identification a réussi
      echo "pas d'erreur".$newMail." ".$newNom." ".$newPrenom." ".$newPassword;

      // "UPDATE `users` SET `nom` = 'mklm', `prenom` = 'jf', `mail` = 'ejkkh@jk', `password` = '13546' WHERE `users`.`id` = 15 "

          
      // Create connection
      $conn = new mysqli("localhost", "g4nalysis_users", "secret", "g4nalysis2");
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "UPDATE users SET nom = '" .$newNom. "', prenom = '" .$newPrenom. "', mail = '" .$newMail. "', password = md5('" .$newPassword. "') WHERE id = '" .$donnesUser['id']."'";

      if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully";

          // Destruction des variables de sessions inutiles
          
          unset($_SESSION['nomErreur']);
          unset($_SESSION['prenomErreur']);
          unset($_SESSION['passwordErreur2']);
          unset($_SESSION['passwordErreur1']);
          unset($_SESSION['passwordErreur2']);
          unset( $_SESSION['emailErreur']);

          // Mise à jour de la variable de session donnesUser

          $bdd = getBdd();

          $requete = "SELECT * FROM users WHERE id=?";
          $resultat = $bdd->prepare($requete);
          $resultat->execute(array($donnesUser['id']));
    
          $donnesUser = $resultat->fetch();
          $_SESSION['donnesUser'] = $donnesUser;
          $_SESSION['prenomUser'] = $donnesUser['prenom'];

          header("Location:modifier_profil_1.php");

      } else {
          echo "Error updating record: " . $conn->error;
      }

      $conn->close();
      }
    }
?>