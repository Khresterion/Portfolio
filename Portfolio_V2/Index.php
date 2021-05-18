<?php require_once 'view/view_header.php' ?>
<?php require_once 'view/view_footer.php' ?>

<?php callHeader("Moi", "css/index.css") ?>

<main class="grid-container">
  <?php callNav() ?>
  <div class="About" data-aos="fade-left" data-aos-duration="1000">
    <div class="Title">
      <h1><span class="typed"></span></h1>
      <button onclick="topFunction()" id="myBtn" title="Retour en Haut"></button>
    </div>
    <div class="Description">
      <h3>Web developer junior</h3>
      <p>Hey there, i am a young web <span class="green">developer</span> from the north of France !
        I begun to study some techs by myself, on openClassRoom, Udemy and stackSkills plateforms.
        But alone is hard, so i choosed to get some mentors and officialize my knowledges with classmates at the AFPA school.</p>

      <p>I am <span class="green">fullstack</span> oriented, even if i know that we need couple of years to be fullstack for real.
        I mean here that i studied Frontend and Backend at the same time and i handled some projects from scratch with both sides. And i like both !
        Even if i am more comfortable with the Front :o)</p>

      <p>But i am not only a geek and a Pop Culture lover. I love fitness and to practice some sports. I did gymnastics for years in my youth.
        I like to travel, hikking, ecology and animal cause. Video games of course ! Specially RPG style.
      </p>
    </div>
    <div class="button_about">
      <a href="tel:+647556242" class="button1">+6 47 55 62 42</a>
      <a href="docs/CV_JEREMY.pdf" class="button1">Télécharger CV</a>
      <a href="mailto:axios.ludis@gmail.com" class="button1">Envoyer un mail</a>
    </div>
  </div>
  <div class="Profil-pic" data-aos="fade-left" data-aos-duration="1000">
    <img src="images/me.png" alt="Jérémy" class="rounded-circle">
  </div>
</main>


<?php callFooter() ?>