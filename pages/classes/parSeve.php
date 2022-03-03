<?php
require '../../header.php';

?>
    <div class="main-box">
        <img src="../../img/decors/plant-other3.png" alt="image de plantes haut gauche" class="plant-img-top-left">
        <img src="../../img/decors/plant-other11.png" alt="image de plantes bas droite" class="plant-img-bottom-right">
        <!-- Contenu de la box -->
        <h1 class="conseil-title">Mode d'administration : <span style="color: black;">Sève</span></h1>
        <!-- <p class="stade-description">Ces feuilles </p> -->

        <div class="all-plant-card">
            <?php createPlantCatalogue("WHERE plante.idPlante >= 13 AND plante.idPlante <= 15"); ?>
        </div>

    </div>

</body>

</html>