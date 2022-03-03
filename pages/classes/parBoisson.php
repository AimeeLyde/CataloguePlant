<?php
require '../../header.php';

?>
    <div class="main-box">
        <img src="../../img/decors/plant-other3.png" alt="image de plantes haut gauche" class="plant-img-top-left">
        <img src="../../img/decors/plant-other11.png" alt="image de plantes bas droite" class="plant-img-bottom-right">
        <!-- Contenu de la box -->
        <h1 class="conseil-title">Mode de préparation : <span style="color: black;">Bouillie</span></h1>

        <div class="all-plant-card">
            <?php createPlantCatalogue("WHERE plante.idPlante >= 1 AND plante.idPlante <= 3"); ?>
        </div>
    </div>

</body>

</html>