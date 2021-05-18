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
            <h5>HTML</h5>
            <div class="progress html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-html" role="progressbar">80%</div>
            </div>
            <h5>CSS</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-css" role="progressbar">80%</div>
            </div>
            <h5>JAVASCRIPT</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-js" role="progressbar">70%</div>
            </div>
        </div>
    </div>
    <section class="softskills">
        <div class="TitleR">
            <h2>&lt Soft skills /&gt</h2>
        </div>
        <div class="DescriptionR"></div>

    </section>
</main>
<?php callFooter() ?>