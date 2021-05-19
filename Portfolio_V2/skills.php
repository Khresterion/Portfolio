<?php require_once 'view/view_header.php' ?>
<?php require_once 'view/view_footer.php' ?>

<?php callHeader("Skills", "css/skills.css") ?>

<main class="grid-container">
    <?php callNav() ?>
    <div class="skillbar">
        <div class="TitleL">
            <h2>&lt Compétences /&gt</h2>
        </div>
        <div class="DescriptionL">
            <h6 class="effect-shine">FRONT-END Light Side</h6>
            <!-- <h5>HTML</h5> -->
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-html" role="progressbar">HTML</div>
            </div>
            <!-- <h5>CSS</h5> -->
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-css" role="progressbar">CSS</div>
            </div>
            <!-- <h5>VANILLA JS</h5> -->
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-js" role="progressbar">VANILLA JS</div>
            </div>
            <!-- <h5>BOOTSTRAP</h5> -->
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-bootstrap" role="progressbar">BOOTSTRAP</div>
            </div>
            <hr>
            <h6 class="effect-shine">BACK-END Dark Side</h6>
            <!-- <h5>PHP / OOP</h5> -->
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-php" role="progressbar">PHP / OOP</div>
            </div>
            <!-- <h5>MYSQL</h5> -->
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-mysql" role="progressbar">MYSQL</div>
            </div>
            <!-- <h5>SYMFONY</h5> -->
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-symfony" role="progressbar">SYMFONY</div>
            </div>
        </div>
    </div>
    <section class="softskills">
        <div class="TitleR">
            <h2>&lt Soft skills /&gt</h2>
        </div>
        <div class="DescriptionR">
            <p>I worked 5 years as a client advisor and i am comfortable with relationships, to work in a team and to lead projects alone. I am <span class="green">proactive</span> and very <span class="green">creative</span>.</p>


            <p>I like to learn by myself => i am <span class="green">self-taught</span>. I like the challenge and collaborate on various projects, especially when it's crazy !
                I am also very interestd about cybersecurity and i develop by myself some skills in <span class="green">ethical hacking</span>, for later programming in <span class="red">python</span>. </p>

            <p><span class="green">Upgrade skills</span> in programming langages i know is my first priority, but, i also learn gradually <span class="red">Vue.js</span>, <span class="red">Node.js</span>, <span class="red">postgresQL/GraphQL</span>, <span class="red">C#</span>. </p>

            <div class="button_about">
                <a href="https://www.udemy.com/user/jems-bakerjeremy-boulanger/" target="blank" class="button1">Udemy</a>
                <a href="https://openclassrooms.com/fr/members/pv2rb39kgc96" target="blank" class="button1">OpenClassRoom</a>

            </div>


    </section>
</main>
<?php callFooter() ?>