<?php

/*
require_once "pages/functions.php";
require "header.php";
*/

// Connexion à notre base de données MySQL avec l'invocation du pilote

class PlanteData {

    public static $dsn = 'mysql:host=localhost:3306;dbname=bdplantes'; // serveur de la base de données
    public static $user = 'root'; // nom d'utilisateur
    public static $pass = ''; // mot de passe
    public static $connexion = null; // variable qui va recevoir la base de données
    public static $sql = null; // requete SQL de suppression
    public static $result = null; // variable pour stocker les résultats futurs
    public static $lastId = null; // variable pour récupérer le dernier ID d'une table
    // procédure de connexion à la base de données
    public static function connect(): bool {
        try {
            // connexion à la base de données MySQL via le pilote PDO
            PlanteData::$connexion = new PDO(PlanteData::$dsn, PlanteData::$user, PlanteData::$pass);
            PlanteData::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $errorPDO) { // en cas d'échec de connexion
            // echo 'Connexion échouée : ' . $errorPDO->getMessage();
            echo "<script> alert('Echec de connexion à la base de données.\nEssayez de démmarrer votre serveur de base de données.'); </script>";
            return false;
        }
    }
    // procédure de consultation
    public static function select(string $element, string $table, string $condition = ""): array {
        $list = [];
        try {
            // requête de consultation des données
            PlanteData::$sql = PlanteData::$connexion->prepare("select {$element} from {$table} {$condition}");
            PlanteData::$sql->execute(); // envoi de la requête
            // récupération de tous les résutats de la requête
            PlanteData::$result = PlanteData::$sql->fetchAll(PDO::FETCH_NUM);
            // affichage des données
            foreach (PlanteData::$result as $rows) {
                $PlanteDataList = [];
                foreach ($rows as $row) { $PlanteDataList[] = $row; } // ajout des éléments de chaque lignes temporairement
                // récupération de la DESIGNATION, de l'ADRESSE et le TELEPHONE du fournisseur
                $list[] = $PlanteDataList;
            }
        } catch (PDOException $error) {
            //echo "<pre style='color: red; text-align: center; font-weight: bold;'>Echec de récupération des données</pre>";
            PlanteData::showErrorMessage($error);
        }
        // renvoie du contenu de la liste
        return $list;
    }
    // procédure d'insertion
    public static function insert(string $table, string $properties, string $values, array $keyValues) {
        try {
            // préparation de la requête d'insertion des données
            PlanteData::$sql = PlanteData::$connexion->prepare("insert into {$table} ({$properties}) values ({$values})");
            PlanteData::$sql->execute($keyValues); // execution de la requête
            PlanteData::$lastId = PlanteData::$connexion->lastInsertId(); // récupération du dernier ID inséré
            //var_dump(PlanteData::$lastId); // TEST //
            // affichage d'un message de succès
            //echo "<pre style='color: green; text-align: center; font-weight: bold;'>Informations enregistréees avec succès</pre>";
        } catch (PDOException $error) { // capture d'une erreur d'insertion et affichage d'un message d'échec
            echo /**/"<pre style='color: red; text-align: center; font-weight: bold;'>Echec de l'enregistrement</pre>";/*$error;*/
        }
    }
    // procédure de modification
    public static function update(string $table, string $keys, array $values, string $condition) {
        try {
            // préparation de la requête de modification des données
            PlanteData::$sql = PlanteData::$connexion->prepare("update {$table} set {$keys} where {$condition}");
            PlanteData::$sql->execute($values); // envoie de la requête
            // affichage d'un message de succès
            echo "<pre style='color: green; text-align: center; font-weight: bold;'>Modification réussie</pre>";
        } catch (PDOException $error) {
            echo "<pre style='color: red; text-align: center; font-weight: bold;'>Echec de la modification</pre>";
        }
    }
    // procédure de suppression
    public static function delete() {
        echo "suppression de données";
    }

    public static function showErrorMessage($error) {
        echo "<img src='/img/flat icon/hopital.png' alt=''>";
        echo "<pre style='font-size: 24px; color: red; text-align: center; font-weight: bold;'>Oups ! un problème est survenu.</pre>";
        echo "<pre style='font-size: 14px; color: dark red; text-align: center; font-weight: bold;'>$error</pre>";
    }
}

?>