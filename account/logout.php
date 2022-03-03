<?php

if (session_status() === PHP_SESSION_NONE) { session_start(); } # reprise de la session

if (!empty($_SESSION["login"])) { unset($_SESSION["login"]); } # suppression de la variable de connexion
# et donc déconnexion d'un utilisateur

foreach ($_SESSION as $session) {
    unset($_SESSION[$session]);
}

require_once "auth.php";
redirectUser("");

?>