<?php require_once 'view/view_header.php' ?>
<?php require_once 'view/view_footer.php' ?>

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
      $success = "<strong>Success!</strong> Your message have been send successfully!";
    } else {
      // echo '<p>Erreur.</p>';
      $error = "There is an error here...";
    }
  }
} ?>

<?php callHeader("Contact", "css/contact.css") ?>

<div id='stars'></div>
<div id='stars2'></div>
<!-- <div id='stars3'></div> -->

<div class="container">
  <form id="contact" action="" method="post">
    <div class="header">
      <div class="headerTitles">
        <h3>Contact Us</h3>
        <h4>I am joking, we are alone !</h4>
      </div>
      <div class="headerLink">
        <div> <a href="Index.php"><i class="fas fa-home fa-2x"></i></a></div>
      </div>
    </div>

    <fieldset>
      <input placeholder="Name" type="text" id="name" name="name" tabindex="1" size="60" autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Mail" id="mail" type="email" name="mail" tabindex="2">
      <span class="error" aria-live="polite"></span>
    </fieldset>
    <fieldset>
      <input placeholder="Phone (optional)" id="tel" name="tel" type="tel" tabindex="3">
    </fieldset>
    <fieldset>
      <input placeholder="Subject" id="subject" name="subject" type="text" tabindex="4">
    </fieldset>
    <fieldset>
      <textarea placeholder="What are we going to discuss ?" id="message" name="message" tabindex="5"></textarea>
    </fieldset>
    <!-- <fieldset> -->
    <button name="send" type="submit" id="contact-submit" data-submit="...Sending">SEND</button>
    <?php if ($success) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert"><button type=" button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button><?= $success ?>
      </div>
    <?php endif ?>
    <?php if ($error) : ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert"><button type=" button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button><?= $error ?>
      </div>
    <?php endif ?>
    <!-- </fieldset> -->
  </form>


  <!-- <footer class="text-center">
    <h5>© Dark Room - 2021</h5>
    <h4>Powered by me ❤ and myself</h4>
  </footer> -->

</div>

<?php callFooter() ?>