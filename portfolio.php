<?php require_once 'view/view_header.php' ?>
<?php require_once 'view/view_footer.php' ?>

<?php callHeader("Portfolio", "css/portfolio.css") ?>

<main class="grid-container">
    <?php callNav() ?>
    <section class="Portfolio">
        <div class="Title">
            <h2>&lt Portfolio /&gt</h2>
        </div>
        <div class="accordian">


            <a href="Index.php" title="First solo class project, my CV !" class="item item-1"></a>
            <a href="https://whatthefur.fr/" title="Photography website project on Wordpress (my own pics yeah !)" target="blank" class="item item-2"></a>
            <a href="https://github.com/TrancalyT/Fil_Rouge" title="! WIP ! First collaborative project FULLSTACK (html/css/js/bootstrap/PHP/mysql)" target="blank" class="item item-3"></a>
            <a href="Index.php" class="item item-4"></a>
            <a href="Index.php" class="item item-5"></a>



        </div>

    </section>
</main>
<?php callFooter() ?>