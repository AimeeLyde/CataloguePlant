<?php
if (session_status() === PHP_SESSION_NONE) { session_start(); } # démarrage de la session
# fonction pour vérifier si un utilisateur est connecté
function isLogin() {
    return !empty($_SESSION["login"]);
}

//$_SESSION["login"] = true;
//unset($_SESSION["login"]);

# fonction pour rediriger un utilisateur vers la page d'accueil
function redirectUser(string $directory) {
    if (isLogin() === false) {
        header("Location: {$directory}login.php");
        exit();
    }
}


?>