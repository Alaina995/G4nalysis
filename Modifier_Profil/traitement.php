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
  $bdd = getBdd();

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
      if($oldPassword == $donnesUser['password'])
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
    }
  }
?>