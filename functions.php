<?php
require_once 'PlanteData.php';
// fonction permettant de changer le nom dans le head en fonction du lien de la page
function getPageTitle() {
    $pagename = $_SERVER['SCRIPT_NAME'];
    $title = 'Catalogue de plantes antipaludiques';

    switch ($pagename) {
        case '/index.php':
            $title = 'Accueil - '.$title;
            break;
        case '/pages/conseils.php':
            $title = 'Conseils - '.$title;
            break;
        case '/pages/contacts.php':
            $title = 'Contacts - '.$title;
            break;
        case '/pages/exercices.php':
            $title = 'Exercices - '.$title;
            break;
        case '/pages/stadeA.php':
            $title = 'Stade avancé - '.$title;
            break;
        case '/pages/stadePA.php':
            $title = 'Stade peu avancé - '.$title;
            break;
        case '/pages/plantes.php':
            $title = 'Plantes - '.$title;
            break;
        case '/pages/classes/parBoisson.php':
            $title = 'Plantes classées par mode de préparation - '.$title;
            break;
        case '/pages/classes/parCreme.php':
            $title = 'Plantes classées par mode de préparation - '.$title;
            break;
        case '/pages/classes/parDecoction.php':
            $title = 'Plantes classées par mode de préparation - '.$title;
            break;
        case '/pages/classes/parFeuille.php':
            $title = 'Plantes classées par partie utilisée - '.$title;
            break;
        case '/pages/classes/parRacine.php':
            $title = 'Plantes classées par mode de préparation - '.$title;
            break;
        case '/pages/classes/parSeve.php':
            $title = 'Plantes classées par mode de préparation - '.$title;
            break;
        case '/pages/classes/parTige.php':
            $title = 'Plantes classées par mode de préparation - '.$title;
            break;
        case '/pages/classes/parVapeur.php':
            $title = 'Plantes classées par mode de préparation - '.$title;
            break;
        default:
            break;
    }
    return $title;
}

// fonction permettant de changer le nom dans le head en fonction du lien de la page
function getNavLinkDirectory() {
    $pagename = $_SERVER['SCRIPT_NAME'];
    $directory = '';

    if ($pagename == '/index.php') {
        $directory = 'pages/';
    }
    if (
        $pagename == '/pages/classes/parBoisson.php' ||
        $pagename == '/pages/classes/parCreme.php' ||
        $pagename == '/pages/classes/parDecoction.php' ||
        $pagename == '/pages/classes/parFeuille.php' ||
        $pagename == '/pages/classes/parRacine.php' ||
        $pagename == '/pages/classes/parSeve.php' ||
        $pagename == '/pages/classes/parTige.php' ||
        $pagename == '/pages/classes/parVapeur.php'
    ) {
        $directory = '../';
    }
    return $directory;
}

// fonction permettant de changer le répertoire de ceratins fichiers
function getPageDirectory() {
    $pagename = $_SERVER['SCRIPT_NAME'];
    $directory = '';

    if ($pagename != '/index.php') {
        $directory = '../';
    }
    if (
        $pagename == '/pages/classes/parBoisson.php' ||
        $pagename == '/pages/classes/parCreme.php' ||
        $pagename == '/pages/classes/parDecoction.php' ||
        $pagename == '/pages/classes/parFeuille.php' ||
        $pagename == '/pages/classes/parRacine.php' ||
        $pagename == '/pages/classes/parSeve.php' ||
        $pagename == '/pages/classes/parTige.php' ||
        $pagename == '/pages/classes/parVapeur.php'
    ) {
        $directory = '../../';
    }
    return $directory;
}

function getDescriptionDirectory() {
    $pagename = $_SERVER['SCRIPT_NAME'];
    $directory = '';

    if (
        $pagename != '/pages/plantes.php' &&
        $pagename != '/pages/stadeA.php' &&
        $pagename != '/pages/stadePA.php'
    ) {
        $directory = '../';
    }
    return $directory;
}

// fonction permettant de créer des cadres de plantes
function createPlantCatalogue() {
    if (PlanteData::connect()) {
        // récupération des plantes depuis la bd
        $planteCatalogue = PlanteData::select('lienPlante, image, nomPlante, description', 'plante');
        foreach ($planteCatalogue as $plante) {
            echo "<div class='plant-card'>";
                echo "<a href='" . getDescriptionDirectory() . "description/$plante[0]'>";
                    echo "<img src='" . getPageDirectory() . "$plante[1]' alt='plante 1' class='plant-card-img'>";
                    echo "<div class='plant-card-bottom'>";
                        echo "<h3 class='plant-name'>$plante[2]</h3>";
                        echo "<p class='plant-description'>$plante[3]</p>";
                    echo "</div>";
                echo "</a>";
            echo "</div>";
        }
    } else {
        echo "<img src='/img/flat icon/hopital.png' alt=''>";
        echo "<pre style='font-size: 24px; color: red; text-align: center; font-weight: bold;'>Oups ! un problème est survenu.</pre>";
    }
}



?>