<?php
require '../header.php';
?>
    <div class="main-box">
        <img src="../img/decors/plant-other3.png" alt="image de plantes haut gauche" class="plant-img-top-left">
        <img src="../img/decors/plant-other11.png" alt="image de plantes bas droite" class="plant-img-bottom-right">
        <!-- Titre -->
        <h1 class="exercices-title">Exercices & Corrigés</h1>
        <!-- panneau de droite -->
        <div class="stade-plant-s">
            <img src="../img/decors/left-arrow.png" alt="flèche" class="pannel-arrow">
            <!-- partie utilisée -->
            <div class="plant-properties">
                Partie utilisée
                <div class="plant-properties-element" id="plant-properties-part">
                    <a href="classes/parFeuille.php" class="plant-properties-link">Feuille</a>
                    <!--<a href="classes/parRacine.php" class="plant-properties-link">Racine</a>-->
                    <a href="classes/parTige.php" class="plant-properties-link">Tige</a>
                </div>
            </div>
            <!-- mode de préparation -->
            <div class="plant-properties">
                Mode de préparation
                <div class="plant-properties-element" id="plant-properties-cook">
                    <a href="classes/parVapeur.php" class="plant-properties-link">Vapeur</a>
                    <!--<a href="classes/parBouillie.php" class="plant-properties-link">Boisson</a>-->
                    <a href="classes/parCreme.php" class="plant-properties-link">Crème</a>
                </div>
            </div>
            <!-- mode d'administration -->
            <div class="plant-properties">
                Mode d'administration
                <div class="plant-properties-element" id="plant-properties-eat">
                    <a href="classes/parDecoction.php" class="plant-properties-link">Décoction</a>
                    <!--<a href="classes/parInjection.php" class="plant-properties-link">Injection</a>
                    <a href="classes/parSeve.php" class="plant-properties-link">Sève</a>-->
                </div>
            </div>
        </div>
        <!-- Toutes les cartes des plantes -->
        <div class="all-plant-card">
            <!-- Exercice 1 -->
            <div class="exercices-card">
                <a href="exercices/Addition.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 1: <span class="exo-title">Addition</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer la somme de 2 nombres grace à des champs de saisie.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 2 -->
            <div class="exercices-card">
                <a href="exercices/Soustraction.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 2: <span class="exo-title">Soustraction</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer la différence de 2 nombres grace à des champs de saisie.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 3 -->
            <div class="exercices-card">
                <a href="exercices/Multiplication.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 3: <span class="exo-title">Multiplication</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le produit de 2 nombres grace à des champs de saisie.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 4 -->
            <div class="exercices-card">
                <a href="exercices/Division.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 4: <span class="exo-title">Division</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le quotient de 2 nombres grace à des champs de saisie.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 11 -->
            <div class="exercices-card">
                <a href="exercices/Deal.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 11: <span class="exo-title">Deal</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de saisir des produits, leurs régions ainsi que leurs prix pour calculer leur montant.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 13 -->
            <div class="exercices-card">
                <a href="exercices/Epsilone.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 13: <span class="exo-title">Epsilone</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de réaliser la fonction Epsilone tttttttttttttttttttttttttttttttt rrrrrrrrrrrrrrrrr rrrrrrrrrrrrrrrrrrrrrr.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 14 -->
            <div class="exercices-card">
                <a href="exercices/Equation2nd.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 14: <span class="exo-title">Equation du 2nd degré</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de résoudre une équation du 2nd degré dans R.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 15 -->
            <div class="exercices-card">
                <a href="exercices/Factorielle.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 15: <span class="exo-title">Factorielle</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer la factorielle d'un nombre saisit par l'utilisateur.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 18 -->
            <div class="exercices-card">
                <a href="exercices/Fibo1.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 18: <span class="exo-title">Fibo1</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer la somme de Fibonacci d'un nombre saisi par l'utilisateur.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 19 -->
            <div class="exercices-card">
                <a href="exercices/Fibonacci.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 19: <span class="exo-title">Fibonacci</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer la somme de Fibonacci d'un nombre saisi par l'utilisateur.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 20 -->
            <div class="exercices-card">
                <a href="exercices/Fibonacci2.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 20: <span class="exo-title">Fibonacci2</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer la somme de Fibonacci d'un nombre saisi par l'utilisateur.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 21 -->
            <div class="exercices-card">
                <a href="exercices/Cercle.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 21: <span class="exo-title">Cercle</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 22 -->
            <div class="exercices-card">
                <a href="exercices/Tableau.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 22: <span class="exo-title">Tableau</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 23 -->
            <div class="exercices-card">
                <a href="exercices/Inversion.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 23: <span class="exo-title">Inversion</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 24 -->
            <div class="exercices-card">
                <a href="exercices/Inversion.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 24: <span class="exo-title">Age</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 25 -->
            <div class="exercices-card">
                <a href="exercices/Maj.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 25: <span class="exo-title">Majuscule</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 26 -->
            <div class="exercices-card">
                <a href="exercices/Min.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 26: <span class="exo-title">Minuscule</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 27 -->
            <div class="exercices-card">
                <a href="exercices/Addition.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 27: <span class="exo-title">Addition</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 28 -->
            <div class="exercices-card">
                <a href="exercices/Multiplication.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 28: <span class="exo-title">Produit</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 29 -->
            <div class="exercices-card">
                <a href="exercices/Moyenne.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 29: <span class="exo-title">Moyenne</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
            <!-- Exercice 30 -->
            <div class="exercices-card">
                <a href="exercices/Date.html">
                    <img src="../img/flat icon/motif-exercices.png" alt="plante 1" class="exercices-card-img">
                    <div class="exercices-card-bottom">
                        <h3 class="exercices-name">Exercice 30: <span class="exo-title">Date</span></h3>
                        <p class="exercices-description">
                            Dans cet exercice on vous demande de calculer le périmètre et l'aire d'un cercle dont on a saisi les données.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>

</html>