<?php
//Méthodes de filtres
  $pattern = '/[a-zA-Z]$/u';
  $numberPattern = '/0+[0-9]{9}$/im';
  $mailPattern = '/[-0-9a-zA-Z.+_]+@+[-0-9a-zA-Z.+_]+\.+[a-zA-Z]{2,4}$/u';
  $messagePattern = '/[a-zA-Z0-9.,;\/:!?&\"\'\(\)-*+]$/u';
//Eléments à filtrer
  $firstName = preg_match($pattern, $_POST['user_firstName']);
  $name = preg_match($pattern, $_POST['user_name']);
  $phone = preg_match($numberPattern, $_POST['user_phone']);
  $message = preg_match($messagePattern, $_POST['user_message']);
  $mail = preg_match($mailPattern, $_POST['user_email']);
  
  if (!($firstName)) {
    echo "<p>Champ prénom invalide</p>"
  };
  if (!($name)) {
    echo "<p>Champ nom invalide</p>"
  };
  if (!($phone)) {
    echo "<p>Champ téléphone invalide</p>"
  };
  if (!($message)) {
    echo "<p>Champ message invalide</p>"
  };
  if (!($mail)) {
    echo "<p>Champ courriel invalide</p>"
  };
  if (($firstName && $name && $phone && $message && $mail)) {
  echo "<p>Merci ", $_POST['user_firstName'], " ", $_POST['user_name'], ' de nous avoir contacté à propos de "', $_POST['user_subject'], '".</p>';
  echo "<p>Un de nos conseiller vous contactera soit à l'adresse ", $_POST['user_email'], " ou par téléphone au ", $_POST['user_phone'], " dans les plus brefs délais pour traiter votre demande :</p>";
  echo "<p>", $_POST['user_message'], "</p>";};
?>
