<?php

require_once 'functions.php';
// require_once 'account/auth.php';
// if (isLogin() === false) {
//     header("Location: ". getPageDirectory() . "account/login.php"); # redirection vers la page d'accueil
//     exit();
// }

?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= getPageTitle() ?></title>
    <link rel="stylesheet" href="<?= getPageDirectory() ?>style.css">
    <script type="text/javascript" src="../script.js"></script>
</head>

<body>
    <header>
        <!-- Barre d'en-tête du site -->
        <div class="header">
            <nav class="header-nav">
                <?php
                // faire apparaitre le bouton ACCUEIL lorsqu'on est pas sur la page d'accueil
                $pagename = $_SERVER['SCRIPT_NAME'];
                if ($pagename != '/index.php') {
                    echo "<a href='". getPageDirectory() ."index.php' class='header-link'>Accueil</a>";
                }
                ?>
                <a href="<?= getNavLinkDirectory() ?>conseils.php" class="header-link" id="conseils-link">Conseils</a>
                <a href="#" class="header-link" id="stades-link">Stades de paludisme</a>
                <a href="<?= getNavLinkDirectory() ?>plantes.php" class="header-link" id="plantes-link">Plantes</a>
            </nav>
            <!---->
            <div class="stade-container">
                <!--<a href="#" class="stade-container-title">Stades de paludisme</a>-->
                <div class="stade-bloc">
                    <a href="<?= getNavLinkDirectory() ?>stadePA.php" class="stade-link">Peu avancé</a>
                    <hr>
                    <a href="<?= getNavLinkDirectory() ?>stadeA.php" class="stade-link">Avancé</a>
                </div>
            </div>
            <!---->
        </div>
        <?php
        if ($pagename != '/index.php') {
            // variable permettant de spécifier quel lien dans la navbar est sélectionné
            echo "<script> selectedNavLink('$pagename'); </script>";
        }
        ?>
    </header>