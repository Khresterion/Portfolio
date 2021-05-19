<?php require_once 'view_header.php' ?>
<?php require_once 'view_footer.php' ?>

<?php callHeader("Contact", "../css/contact.css") ?>

<div id='stars'></div>
<div id='stars2'></div>
<!-- <div id='stars3'></div> -->
<div class="container">

  <form id="contact" action="controller/mail_process.php" method="post">
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
      <input placeholder="Name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Mail" type="email" name="mailcontact" required tabindex="2">
    </fieldset>
    <fieldset>
      <input placeholder="Phone (optional)" name="tel" type="tel" tabindex="3">
    </fieldset>
    <fieldset>
      <input placeholder="Subject" type="text" required tabindex="4">
    </fieldset>
    <fieldset>
      <textarea placeholder="What are we going to discuss ?" name="message" required tabindex="5"></textarea>
    </fieldset>
    <!-- <fieldset> -->
    <button name="send" type="submit" id="contact-submit" data-submit="...Sending">Send</button>
    <!-- </fieldset> -->
  </form>
  <!-- <footer class="text-center">
    <h5>© Dark Room - 2021</h5>
    <h4>Powered by me ❤ and myself</h4>
  </footer> -->

</div>

<?php callFooter() ?>