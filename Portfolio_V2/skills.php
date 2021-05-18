<?php require_once 'view/view_header.php' ?>
<?php require_once 'view/view_footer.php' ?>

<?php callHeader("Skills", "css/skills.css") ?>

<main class="grid-container">
    <?php callNav() ?>
    <section class="skillbar">
        <div class="TitleL">
            <h2>&lt Compétences /&gt</h2>
        </div>
        <div class="DescriptionL">
            <h5>HTML</h5>
            <div class="progress html">
                <div class="progress-bar progress-bar-striped progress-bar-animated bar-html" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%" style="background-color: #FF8000;">40%</div>
            </div>
            <h5>CSS</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-css" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40% effectué (success)</div>
            </div>
            <h5>JAVASCRIPT</h5>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped progress-bar-animated bar-js" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">40% effectué (success)</div>
            </div>




        </div>
    </section>
    <section class="softskills">
        <div class="TitleR">
            <h2>&lt Soft skills /&gt</h2>
        </div>
        <div class="DescriptionR"></div>

    </section>
</main>
<?php callFooter() ?>