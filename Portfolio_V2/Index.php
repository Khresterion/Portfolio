<?php require_once 'view/view_header.php' ?>
<?php require_once 'view/view_footer.php' ?>

<?php callHeader("Moi", "css/index.css") ?>

<main class="grid-container">
  <?php callNav() ?>
  <div class="About">
    <div class="Title">
      <h1><span class="typed"></span></h1>
    </div>
    <div class="Description">
      <h3>Développeur Web</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos asperiores quam ipsa tempora, aperiam temporibus atque maxime est quis doloribus a consequuntur, accusantium harum tenetur quod, nam repellat labore dicta? Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aperiam delectus atque voluptatem, vitae a placeat sed doloremque nesciunt corporis reprehenderit officiis culpa ab? Dolore, tenetur ratione? Error, sapiente nam?</p>

      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos asperiores quam ipsa tempora, aperiam temporibus atque maxime est quis doloribus a consequuntur, accusantium harum tenetur quod, nam repellat labore dicta? Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aperiam delectus atque voluptatem, vitae a placeat sed doloremque nesciunt corporis reprehenderit officiis culpa ab? Dolore, tenetur ratione? Error, sapiente nam?</p>
      <p>lor Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem aperiam delectus atque voluptatem, vitae a placeat sed doloremque nesciunt corporis reprehenderit officiis culpa ab? Dolore, tenetur ratione? Error, sapiente nam?</p>
    </div>
    <div class="button_about">
      <a href="tel:+647556242" class="button1">+6 47 55 62 42</a>
      <a href="docs/CV_JEREMY.pdf" class="button1">Télécharger CV</a>
      <a href="mailto:axios.ludis@gmail.com" class="button1">Envoyer un mail</a>
    </div>
  </div>
  <div class="Profil-pic">
    <img src="images/me.png" alt="Jérémy" class="rounded-circle">
  </div>
</main>

<?php callFooter() ?>