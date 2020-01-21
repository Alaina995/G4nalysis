<?php
	// on vérifie que le formulaire a bien été envoyé
	if (isset($_POST['envoi']))
	{
				$send_to = "guiraud.alaina@outlook.fr";
			}


		$subject_mail= $_POST['objet'];
		$message_mail = '<html>';
		$message_mail .= '<body>';
		$message_mail .= "Vous avez recu un mail de ".$_POST['nom'].'</p>';

		$message_mail .= '<p>'.'<strong>'.'<br/>'."Objet : ".'</strong>'.$subject_mail.'</p>';
		$message_mail .= '<p>'.'<strong>'."Contenu du message".'</strong></p>';
		$message_mail .= '<p>'.nl2br ($_POST['message']).'</p>';
		$message_mail .= '</body>';
		$message_mail .= '</html>';

		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";


		// On envoie de mail via la fonction native mail de php
		mail($send_to, $subject_mail, $message_mail, $headers);
		// on affiche une confirmation d'envoie du mail a l'utilisateur
		echo ('Votre message a bien été envoyé à : '.$_POST['destinataire']);
		echo ('<br />voici un apercu de votre message :<br /> '.$_POST['message']);

	}
	else {echo 'pas de formulaire envoyé';} // Le formulaire n'a pas été envoyé : on affiche une erreur
?>