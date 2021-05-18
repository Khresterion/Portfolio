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
            <h6>FRONT</h6>
            <h5>HTML</h5>
            <div class="progress html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-html" role="progressbar"></div>
            </div>
            <h5>CSS</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-css" role="progressbar"></div>
            </div>
            <h5>VANILLA JS</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-js" role="progressbar"></div>
            </div>
            <h5>BOOTSTRAP</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-bootstrap" role="progressbar"></div>
            </div>
            <hr>
            <h6>BACK</h6>
            <h5>PHP / OOP</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-php" role="progressbar"></div>
            </div>
            <h5>MYSQL</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-mysql" role="progressbar"></div>
            </div>
            <h5>SYMFONY</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-symfony" role="progressbar"></div>
            </div>
        </div>
    </div>
    <section class="softskills">
        <div class="TitleR">
            <h2>&lt Soft skills /&gt</h2>
        </div>
        <div class="DescriptionR">
            <p>insert some <span class="green">blabla</span> here</p>
        </div>


    </section>
</main>
<?php callFooter() ?>