<?php

define ("MODETEST", false); // à switcher pour voir les effets en mode dév ou production

var_dump($_POST);


if (isset($_POST["nom"])) {
    $nomArtiste = htmlspecialchars($_POST["nom"]);
}
else{
    $nomArtiste = Null;
}

// var_dump($nomArtiste);
// die;

$urlArtiste = $_POST["url"];

if ($nomArtiste == "" || $nomArtiste == Null) {
    header("Location: ajouter.php?errNom=1");
    exit;
}

include 'db.php';
$db = ConnexionBase();


try {
    // ici, erreur de syntaxe volontaire dans la requête ...
    $requete = $db->prepare("INSERT INO artist (artist_name, artist_url) VALUES (:nom, :url)");

    $requete->bindValue(":url", $urlArtiste, PDO::PARAM_STR);
    $requete->bindValue(":nom", $nomArtiste, PDO::PARAM_STR);

    $requete->execute();

    $requete->closeCursor();
}

// Gestion des erreurs
catch (Exception $e) {

    if (MODETEST) {
        
        // en phase de développement :
        
        var_dump($requete->queryString);
        var_dump($requete->errorInfo());
        // echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script_ajout.php)");
    }
    else {

        // en mode production (= site en ligne) :
        // si le site est en ligne, il faut plutôt s'enregistrer un log :
        echo error_log("INSERT artist failed - code " . $requete->errorInfo()[0]);
        
        // afficher un message d'erreur "classique" à l'utilisateur :
        exit(header("Location: ajouter.php?err=500")); //cf. ajouter.php 
    }
}

// Si OK: exit avec redirection vers la page de liste
exit(header("Location: index.php"));

?>