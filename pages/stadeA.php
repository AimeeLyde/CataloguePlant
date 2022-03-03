<?php
require '../header.php';
?>
    <div class="main-box">
        <img src="../img/decors/plant-other3.png" alt="image de plantes haut gauche" class="plant-img-top-left">
        <img src="../img/decors/plant-other11.png" alt="image de plantes bas droite" class="plant-img-bottom-right">
        <!-- Contenu de la box -->
        <h1 class="conseil-title">Stade avancé du Paludisme</h1>
        <p class="stade-description">Les plantes répertoriées ci dessous seront plus éfficaces pour traiter un niveau de paludisme avancé.</p>
        <!-- Toutes les corates des plantes -->
        <div class="all-plant-card">
            <?php
            createPlantCatalogue("WHERE plante.Stade = 'Avance'");
            ?>
        </div>
    </div>
</body>
</html>