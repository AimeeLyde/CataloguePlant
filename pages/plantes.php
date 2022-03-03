<?php
require '../header.php';
?>
    <div class="main-box">
        <img src="../img/decors/plant-other3.png" alt="image de plantes haut gauche" class="plant-img-top-left">
        <img src="../img/decors/plant-other11.png" alt="image de plantes bas droite" class="plant-img-bottom-right">
        <!-- Titre -->
        <h1 class="plant-title">Catalogue de plantes</h1>
        <!-- panneau de droite -->
        <!--<div class="stade-plant-s">
            <img src="../img/decors/left-arrow.png" alt="flèche" class="pannel-arrow">
           --> <!-- partie utilisée -->
           <!-- <div class="plant-properties">
                Partie utilisée
                <div class="plant-properties-element" id="plant-properties-part">
                    <a href="classes/parFeuille.php" class="plant-properties-link">Feuille</a>
                     --><!--<a href="classes/parRacine.php" class="plant-properties-link">Racine</a>-->
                   <!-- <a href="classes/parTige.php" class="plant-properties-link">Tige</a>
                </div>
            </div>-->
            <!-- mode de préparation -->
            <!--<div class="plant-properties">
                Mode de préparation
                <div class="plant-properties-element" id="plant-properties-cook">
                    <a href="classes/parVapeur.php" class="plant-properties-link">Vapeur</a>
                    --><!--<a href="classes/parBouillie.php" class="plant-properties-link">Boisson</a>-->
                   <!--< <a href="classes/parCreme.php" class="plant-properties-link">Crème</a>
                </div>
            </div>
            --><!-- mode d'administration -->
           <!-- <div class="plant-properties">
                Mode d'administration
                <div class="plant-properties-element" id="plant-properties-eat">
                    <a href="classes/parDecoction.php" class="plant-properties-link">Décoction</a>
                    --><!--<a href="classes/parInjection.php" class="plant-properties-link">Injection</a>
                    <a href="classes/parSeve.php" class="plant-properties-link">Sève</a>-->
              <!--  </div>
            </div>
        </div> -->
        <!-- Toutes les cartes des plantes -->
        <div class="all-plant-card">
            <?php
            createPlantCatalogue();
            ?>
        </div>
    </div>

</body>

</html>