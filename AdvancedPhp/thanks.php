<?php
//Méthodes de filtres
  $pattern = '/[^a-zA-Z0-9'  . " " . ']/u';
  $numberPattern = '/0+[0-9]{9}$/im';
  $mailPattern = '/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/im';
  $messagePattern = '/[^a-zA-Z0-9,.:!?;€'  . " " . ']/u';
//Eléments à filtrer
  $firstName = preg_replace($pattern, '', $_POST['user_firstName']);
  $name = preg_replace($pattern, '', $_POST['user_name']);
  $phone = preg_replace($numberPattern, '', $_POST['user_phone']);
  $message = preg_replace($messagePattern, '', $_POST['user_message']);
  $mail = preg_replace($mailPattern, '', $_POST['user_email']);

  echo "<p>Merci ", $firstName, " ", $name, ' de nous avoir contacté à propos de "', $_POST['user_subject'], '".</p>';
  echo "<p>Un de nos conseiller vous contactera soit à l'adresse ", $mail, " ou par téléphone au ", $phone, " dans les plus brefs délais pour traiter votre demande :</p>";
  echo "<p>", $message, "</p>";
?>
