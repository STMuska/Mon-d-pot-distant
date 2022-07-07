<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
include 'db.php';

// var_dump($_GET["artist_id"]);

$artist = getArtist($_GET["artist_id"]);
// var_dump($artist);

echo "Artiste n°" . $artist->artist_id . '<br>';
echo $artist->artist_name . '<br>';
echo $artist->artist_url . '<br>';

?>

<a href="PDO.php">Retour</a>
<a href="update.php?id=<?= $artist->artist_id ?>">Modifier</a>
<a href="supprimer.php">Supprimer</a>

</body>
</html>