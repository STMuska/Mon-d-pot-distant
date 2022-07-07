<?php

define ("MODETEST", false); // à switcher pour voir les effets en mode dév ou production


// ICI : normalement, mêmes contrôles à faire que pour l'ajout
// ++ récupérer l'ID (passé dans le $_POST avec le champ <input type="hidden"> en HTML)
$idArtiste = $_POST["id"];
$nomArtiste = $_POST["nom"];
$urlArtiste = $_POST["url"];


// puis :
include 'db.php';
$db = ConnexionBase();

// ensuite ce sera la requête SQL qui change : UPDATE au lieu de INSERT

try {
    
    // ici, erreur de syntaxe volontaire dans la requête ...
    $requete = $db->prepare("UPATE artist SET artist_name = :name, artist_url = :url WHERE artist_id = :id");

    $requete->bindValue(":url", $urlArtiste, PDO::PARAM_STR);
    $requete->bindValue(":nom", $nomArtiste, PDO::PARAM_STR);
    $requete->bindValue(":id", $idArtiste, PDO::PARAM_INT);

    $requete->execute();

    $requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {

    if (MODETEST) {
        
        // en phase de développement :
        
        var_dump($requete->queryString);
        var_dump($requete->errorInfo());
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script_modif.php)");
    }
    else {

        // en mode production (= site en ligne) :
        // si le site est en ligne, il faut plutôt s'enregistrer un log :
        echo error_log("UPDATE artist failed - code " . $requete->errorInfo()[0]);
        
        // renvoyer vers une page d'erreur "classique" :
        exit(header("Location: error.html"));
    }
}

// Si OK: redirection vers la page artists.php
exit(header("Location: index.php"));

?>