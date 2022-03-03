<?php
// Declaration des variables
$servername ='localhost';
$username = 'root';
$password = '';

if (
	!empty($_POST["nomPlante"]) &&
	!empty($_POST["lienDescriptPlante"]) &&
	!empty($_POST["imagePlante"]) &&
	!empty($_POST["descriptPlante"]) &&
	!empty($_POST["stadePlante"])
) {
	$nom = $_POST["nomPlante"];
	$lien = $_POST["lienDescriptPlante"];
	$image = $_POST["imagePlante"];
	$description = $_POST["descriptPlante"];
	$stade = $_POST["stadePlante"];
	// Connexion à la base de données
	try{
		$conn = new PDO("mysql:host=$servername;dbname=bdplantes", $username, $password);
		//On définit le mode d'erreur de PDO sur Exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Inseetion dans la base de données
		$sth = $conn->prepare("INSERT INTO plante (nomPlante, lienPlante, image, description, Stade) VALUES ('$nom','$lien','$image','$description','$stade')");
		$sth->execute();
		echo "<script> alert('Plante ajoutée avec succes !); </script>";
		//header('Location: ../index.php');
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
?>
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
	<div class="container" id="update-container">
		<!-- Formulaire -->
		<div class="login-content">
			<form method="post" action="" class="update-form">
				<h2 class="title">Mettre à jour le catalogue</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nom de la plante</h5>
           		   		<input type="text" class="input" name="nomPlante" required>
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i"> 
           		    	<i class ="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>lien vers la description</h5>
           		    	<input type="text" class="input" name="lienDescriptPlante" required>
            	   </div>
            	</div>
				<div class="input-div one">
					<div class="i"> 
						 <i class="fas fa-envelope"></i>
					</div>
					<div class="div">
						 <h5>image</h5>
						 <input type="text" class="input" name="imagePlante" required>
				 	</div>
			 	 </div>
				<div class="input-div one">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Description</h5>
						 <input type="text" class="input" name="descriptPlante" required>
				 	</div>
			  	</div>
				  <div class="input-div one">
					<div class="i"> 
						 <i class="fas fa-lock"></i>
					</div>
					<div class="div">
						 <h5>Stade</h5>
						 <input type="text" class="input" name="stadePlante" required>
				 	</div>
			  	</div>
					<input type="submit" class="btn btn-ajouter" value="Ajouter">
					<a href="../index.php">
						<input class="btn btn-quitter" value="Quitter">
					</a>
            </form>
        </div>
    </div>
	<!-- Bases de donnees -->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
