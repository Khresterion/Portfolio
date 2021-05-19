<?php

if (isset($_POST['send'])) {
  $position_arobase = strpos($_POST['mailcontact'], '@');
  if ($position_arobase === false)
    echo '<p>Votre email doit comporter un arobase.</p>';
  else {
    $return = mail('axios.ludis@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['mailcontact']);
    if ($return)
      echo '<p>Votre message a été envoyé.</p>';
    else
      echo '<p>Erreur.</p>';
  }
}
