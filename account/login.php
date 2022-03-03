<!-- Bases de donnees -->
<?php
require_once "auth.php";


// Declaration des variables
$servername ='localhost';
$username = 'root';
$password = '';

if (
	!empty($_POST["mailUtilisateur"]) &&
	!empty($_POST["mdpUtilisateur"])
) {
	$mail = $_POST["mailUtilisateur"];
	$mdp = $_POST["mdpUtilisateur"];

	// Connexion à la base de données
	try{
		$conn = new PDO("mysql:host=$servername;dbname=bdplantes;", $username, $password);
		//On définit le mode d'erreur de PDO sur Exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sth = $conn->prepare("SELECT mdpUtilisateur FROM utilisateur WHERE mailUtilisateur = '$mail'");
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_NUM);
		$databaseMdp = "";
		foreach ($result as $dbmdp) {
			$databaseMdp = $dbmdp[0];

		}
		if (password_verify($mdp, $databaseMdp)) {
			echo "<script> alert('connexion réussie'); </script>";
			if (session_status() === PHP_SESSION_NONE) { session_start(); } # démarrage de la session
    		$_SESSION["login"] = true; # préciser que l'utilisateur est connecté
			//Renvoie utilisateur à la page
			header('Location: ../index.php');

		} else {
			echo "<script> alert('echec de connexion'); </script>";
		}
	}
	/*On capture les exceptions si une exception est lancée et on affiche
	*les informations relatives à celle-ci*/
	catch(PDOException $e){
		echo "<script> alert('echec de l'ajout'); </script>";
		echo "Erreur : " . $e->getMessage();
	}
}

# redirection vers la page d'accueil si un utilisateur déjà connecté souhaite revenir sur la page de connexion
if (isLogin() === true) {
    header("Location: ../index.php"); # redirection vers la page d'accueil
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!-- Logo Avatar -->
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<!-- Formulaire -->
		<div class="login-content">
			<form method="post" action="">
				<img src="img/avatar.svg">
				<h2 class="title">Connexion</h2>
				<div class="input-div one">
					<div class="i"> 
						 <i class="fas fa-envelope"></i>
					</div>
					<div class="div">
						 <h5>Adresse Mail</h5>
						 <input type="text" class="input" name="mailUtilisateur">
				 	</div>
			 	 </div>
				<div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Mot de passe</h5>
						 <input type="password" class="input" name="mdpUtilisateur">
				 	</div>
			  	</div>
            	<input type="submit" class="btn" value="Se Connecter">
            	<a href="createAccount.php">
            		<input class="btn" value="Créer un compte">
            	</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
