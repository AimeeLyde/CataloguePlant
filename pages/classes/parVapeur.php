<?php
require '../../header.php';

?>
    <div class="main-box">
        <img src="../../img/decors/plant-other3.png" alt="image de plantes haut gauche" class="plant-img-top-left">
        <img src="../../img/decors/plant-other11.png" alt="image de plantes bas droite" class="plant-img-bottom-right">
        <!-- Contenu de la box -->
        <h1 class="conseil-title">Mode de préparation : <span style="color: black;">Vapeur</span></h1>
        <!-- <p class="stade-description">Ces feuilles </p> -->
        <!-- panneau de droite -->
        <div class="stade-plant-options">
            <img src="../../img/decors/left-arrow.png" alt="flèche" class="pannel-arrow">
            <!-- partie utilisée -->
            <div class="plant-properties">
                Partie utilisée
                <div class="plant-properties-element" id="plant-properties-part">
                    <a href="parFeuille.php" class="plant-properties-link">Feuille</a>
                    <!--<a href="parRacine.php" class="plant-properties-link">Racine</a>-->
                    <a href="parTige.php" class="plant-properties-link">Tige</a>
                </div>
            </div>
            <!-- mode de préparation -->
            <div class="plant-properties">
                Mode de préparation
                <div class="plant-properties-element" id="plant-properties-cook">
                    <a href="parVapeur.php" class="plant-properties-link">Vapeur</a>
                    <a href="parCreme.php" class="plant-properties-link">Crème</a>
                </div>
            </div>
            <!-- mode d'administration -->
            <div class="plant-properties">
                Mode d'administration
                <div class="plant-properties-element" id="plant-properties-eat">
                    <a href="parDecoction.php" class="plant-properties-link">Décoction</a>
                    <!--<a href="parSeve.php" class="plant-properties-link">Sève</a>-->
                </div>
            </div>
        </div>
        <div class="all-plant-card">
            <?php createPlantCatalogue("WHERE plante.idPlante >= 22 AND plante.idPlante <= 24"); ?>
        </div>
    </div>

</body>

</html>