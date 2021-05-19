<?php require_once 'view_header.php' ?>
<?php require_once 'view_footer.php' ?>

<?php callHeader("About Me", "../css/index.css") ?>

<main class="grid-container">
  <?php callNav() ?>
  <section class="About">
    <div class="Title">
      <h1><span class="typed"></span></h1>
    </div>
    <div class="Description">
      <h3 class="effect-shine">Web developer junior</h3>
      <p>Hey there, i am a young web <span class="green">developer</span> from the north of France !
        I begun to study some techs by myself, on openClassRoom, Udemy and stackSkills plateforms.
        But alone is hard, so i choosed to get some mentors and officialize my knowledges with classmates at the AFPA school.</p>

      <p>I am <span class="green">fullstack</span> oriented, even if i know that we need couple of years to be fullstack for real.
        I mean here that i studied Frontend and Backend at the same time and i handled some projects from scratch with both sides. And i like both !
        Even if i am more comfortable with the Front :o)</p>

      <p>But i am not only a geek and a Pop Culture lover. I love fitness and to practice some sports. I did gymnastics for years in my youth.
        I like to travel, hikking, ecology and animal cause. Video games of course ! Especially RPG style.
      </p>

      <hr>

      <h4 class="effect-shine">Some references</h4>
      <ul>
        <div class="reference">
          <li>
            8 months of intensive fullstack training at : <a href="https://www.afpa.fr/" target="blank"><span class="red">AFPA - Roubaix</span></a>
          </li>
          <li>
            3 months internship at : <a href="#" target="blank"><span class="red">Compagny</span></a>
          </li>
          <li>
            Developer since <span class="green">2021</span>
          </li>
        </div>
      </ul>

    </div>
    <div class="button_about">
      <!-- <a href="tel:+647556242" class="button1">+6 47 55 62 42</a> -->
      <a href="docs/CV_JEREMY.pdf" class="button1">Download CV</a>
      <a href="https://www.linkedin.com/in/jeremy-boulanger-9274b5174/" target="blank"><i class="fab fa-linkedin fa-5x"></i></a>
      <a href="https://github.com/Khresterion" target="blank"><i class="fab fa-github-square fa-5x"></i></a>
      <a href="" target="blank"><i class="fab fa-instagram fa-5x"></i></a>
      <a href="" target="blank"><i class="fab fa-facebook fa-5x"></i></a>
      <a href="mailto:axios.ludis@gmail.com" class="button1">Send a mail</a>
    </div>
  </section>
  <section class="Profil-pic">
    <img src="../images/me.png" alt="photo" class="rounded-circle">
  </section>
</main>


<?php callFooter() ?>