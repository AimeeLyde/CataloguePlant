<?php
require '../../header.php';

?>
    <div class="main-box">
        <img src="../../img/decors/plant-other3.png" alt="image de plantes haut gauche" class="plant-img-top-left">
        <img src="../../img/decors/plant-other11.png" alt="image de plantes bas droite" class="plant-img-bottom-right">
        <!-- Contenu de la box -->
        <h1 class="conseil-title">Partie utilisée : <span style="color: black;">Feuille</span></h1>
        <!-- panneau de droite -->
        <div class="stade-plant-options">
            <img src="../../img/decors/left-arrow.png" alt="flèche" class="pannel-arrow">
            <!-- partie utilisée -->
            <div class="plant-properties">
                Partie utilisée
                <div class="plant-properties-element" id="plant-properties-part">
                    <a href="parFeuille.html" class="plant-properties-link">Feuille</a>
                    <!--<a href="parRacine.html" class="plant-properties-link">Racine</a>-->
                    <a href="parTige.html" class="plant-properties-link">Tige</a>
                </div>
            </div>
            <!-- mode de préparation -->
            <div class="plant-properties">
                Mode de préparation
                <div class="plant-properties-element" id="plant-properties-cook">
                    <a href="parVapeur.html" class="plant-properties-link">Vapeur</a>
                    <a href="parCreme.html" class="plant-properties-link">Crème</a>
                </div>
            </div>
            <!-- mode d'administration -->
            <div class="plant-properties">
                Mode d'administration
                <div class="plant-properties-element" id="plant-properties-eat">
                    <a href="parDecoction.html" class="plant-properties-link">Décoction</a>
                    <!--<a href="parSeve.html" class="plant-properties-link">Sève</a>-->
                </div>
            </div>
        </div>
        <!-- <p class="stade-description">Ces feuilles </p> -->
        <div class="all-plant-card">
            <?php createPlantCatalogue("WHERE plante.idPlante >= 10 AND plante.idPlante <= 12"); ?>
        </div>

    </div>

</body>

</html>