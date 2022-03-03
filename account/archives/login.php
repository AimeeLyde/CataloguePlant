<?php
require_once "User.php"; # inclusion de la classe des utilisateurs

# fonction de vérification des identifiants
function checkID() {
    # hashage du mot de passe
    $password = '$2y$12$U5TWIv2jGcqRhW0yQZvtTO3dzSkgHPHxK2ISbHhOZvcS5o7yHFeWu';
    # si l'identifiant et le mot de pas=e ne sont pas vides :
    if (!empty($_POST["userid"]) && !empty($_POST["userpassword"])) {
        # et si les identifiants sont superviseur et superviseur :
        if ($_POST["userid"] === "superviseur" && password_verify($_POST["userpassword"], $password)) {
            $user = new User($_POST["userid"], $_POST["userpassword"]); # création d'un nouvel utilisateur
            if (session_status() === PHP_SESSION_NONE) { session_start(); } # démarrage de la session
            $_SESSION["login"] = true; # préciser que l'utilisateur est connecté
            header("Location: index.php"); # rediriger l'utilisateur vers la pgae d'accueil
            exit();
        } else { # si les identifiants sont incorrectes :
            return "<pre style='color: red; text-align: center; font-weight: bold;'>Identifiants invalides</pre>";
        }
    }
}
checkID();

# redirection vers la page d'accueil si un utilisateur déjà connecté souhaite revenir sur la page de connexion
require_once "auth.php";
if (isLogin() === true) {
    header("Location: index.php"); # redirection vers la page d'accueil
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion - STOX</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="login-body">
        <main class="login-main">
            <h1 class="login-title">Connectez vous pour pouvoir gérer vos stocks plus rapidement !</h1>

            <div class="login-banniere"></div>
            <form action="login.php" method="POST" class="login-form" id="user-form">
                <div class="login-inputs">
                    <label for="userid">Identifiant : </label>
                    <input type="text" name="userid" id="userid" class="login-input" required>
                </div>

                <div class="login-inputs">
                    <label for="userpassword">Mot de passe : </label>
                    <input type="password" name="userpassword" id="userpassword" class="login-input" required>
                </div>
            </form>

            <div class="command-button-div">
                <button type="submit" form="user-form" class="command-button">Valider</button>
                <button type="reset" form="user-form" class="command-button">Effacer</button>
            </div>
            <?= checkID()?>
        </main>

        <!--
        <footer>
            <h1 style="text-align: center;">STOX</h1>
        </footer>
        -->
        <script>
            //alert("La session a été fermée car vous ne vous êtes pas encore connecté");
        </script>
    </body>
</html>
