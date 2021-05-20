<?php

$success = null;
$error = null;

if (isset($_POST['send'])) {
  $position_arobase = strpos($_POST['mail'], '@');
  if ($position_arobase === false) {
    // echo '<p>Votre email doit comporter un arobase.</p>';
  } else {
    $return = mail('axios.ludis@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['mail']);
    if ($return) {
      // echo '<p>Votre message a été envoyé.</p>';
      $success = "vous êtes connecté";
    } else {
      // echo '<p>Erreur.</p>';
      $error = "Mot de passe ou identifiant incorrect";
    }
  }
  header("Location: https://dark-room.fr/");
}
