<?php
function ConnexionBase() {

    try 
    {
        $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'STMuska1');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;

    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    }
}

function listArtists() {

    $MaConnexion = ConnexionBase();

    // var_dump($MaConnexion);

    $requete = "SELECT * FROM artist";

    $reqBDD = $MaConnexion->query($requete);

    $resultats = $reqBDD->fetchAll(PDO::FETCH_OBJ);
    
    $reqBDD->closeCursor();
    
    return $resultats;
}

function getArtist($id) {

$MaConnexion = ConnexionBase();

// var_dump($MaConnexion);

$requete = "SELECT * FROM artist WHERE artist_id = :id";

$reqBDD = $MaConnexion->prepare($requete);

$reqBDD->bindValue(":id", $id, PDO::PARAM_INT);

$reqBDD->execute();

$resultats = $reqBDD->fetch(PDO::FETCH_OBJ);

$reqBDD->closeCursor();

// var_dump($resultats);

return $resultats;
}


?>