<?php

function callHeader(string $title, string $css)
{

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title><?= $title ?></title>

        <link rel="shortcut icon" href="../images/icon-index.png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href=<?= $css ?>>

    </head>

    <body>

    <?php }

function callNav()
{

    ?>
        <nav class="Navbar">
            <button onclick="topFunction()" id="myBtn" title="Back to the Sky"></button>
            <div>
                <ul>
                    <li><a href="Index.php">Me</a></li>
                    <li><a href="skills.php">Skills</a></li>
                    <!-- <li><a href="">XP</a></li> -->
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- Bouton scroll to top -->

    <?php } ?>