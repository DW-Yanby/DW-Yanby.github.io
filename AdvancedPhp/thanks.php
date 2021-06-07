<?php
  echo "<p>Merci ", $_POST['user_firstName'], " ", $_POST['user_name'], ' de nous avoir contacté à propos de "', $_POST['user_subject'], '".</p>';
  echo "<p>Un de nos conseiller vous contactera soit à l'adresse ", $_POST['user_email'], " ou par téléphone au ", $_POST['user_telephone'], " dans les plus brefs délais pour traiter votre demande :</p>";
  echo "<p>", $_POST['user_message'], "</p>";
?>