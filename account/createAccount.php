
<!DOCTYPE html>
<html>
<head>
	<title>Création de compte</title>
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
<?php
// Declaration des variables
$servername ='localhost';
$username = 'root';
$password = '';

if (
	!empty($_POST["nomUtilisateur"]) &&
	!empty($_POST["prenomUtilisateur"]) &&
	!empty($_POST["mailUtilisateur"]) &&
	!empty($_POST["mdpUtilisateur"])
) {
	$nom = $_POST["nomUtilisateur"];
	$prenom = $_POST["prenomUtilisateur"];
	$mail = $_POST["mailUtilisateur"];
	$mdp = password_hash($_POST["mdpUtilisateur"], PASSWORD_DEFAULT);
	//$mdp = $_POST["mdpUtilisateur"];
	var_dump($mdp);
	// Connexion à la base de données
	try{
		$conn = new PDO("mysql:host=$servername;dbname=bdplantes", $username, $password);
		//On définit le mode d'erreur de PDO sur Exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Inseetion dans la base de données
		$sth = $conn->prepare("SELECT mailUtilisateur FROM utilisateur");
		$sth->execute();
		$mailList = $sth->fetchAll(PDO::FETCH_NUM);
		//var_dump($mailList);
		$mailExist = false;
		foreach($mailList as $databaseMail) {
			if ($mail == $databaseMail[0]) {
				$mailExist = true;
			}
		}


		if ($mailExist == true) {
			echo "<script> alert('Ce compte exist déja, veuillez vous connecter'); </script>";
		} else {
			$sth = $conn->prepare("INSERT INTO utilisateur (nomUtilisateur, prenomUtilisateur, mdpUtilisateur, mailUtilisateur) VALUES ('$nom', '$prenom', '$mdp', '$mail')");
			$sth->execute();
			//Renvoie utilisateur à la page  : Header('')
			echo "<script> alert('ajout réussi'); </script>";
		}
	}
	/*On capture les exceptions si une exception est lancée et on affiche
	*les informations relatives à celle-ci*/
	catch(PDOException $e){
		echo "<script> alert('echec de l'ajout'); </script>";
		echo "Erreur : " . $e->getMessage();
	}
} else {
	echo "<script> alert('echec de l'ajout encore'); </script>";
}
?>			<img src="img/bg.svg">
		</div>
		<!-- Formulaire -->
		<div class="login-content">
			<form method="post" action="">
				<img src="img/avatar.svg">
				<h2 class="title">Nouveau compte</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nom</h5>
           		   		<input type="text" class="input" name="nomUtilisateur" required>
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i"> 
           		    	<i class ="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Prénoms</h5>
           		    	<input type="text" class="input" name="prenomUtilisateur" required>
            	   </div>
            	</div>
				<div class="input-div one">
					<div class="i"> 
						 <i class="fas fa-envelope"></i>
					</div>
					<div class="div">
						 <h5>Adresse Mail</h5>
						 <input type="text" class="input" name="mailUtilisateur" required>
				 	</div>
			 	 </div>
				<div class="input-div pass">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Mot de passe</h5>
						 <input type="password" class="input" name="mdpUtilisateur" required>
				 	</div>
			  	</div>
            	<input type="submit" class="btn" value="Créer le compte">
            	<a href="login.php">
            		<input class="btn" value="Se connecter">
            	</a>
            </form>
        </div>
    </div>
	<!-- Bases de donnees -->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
