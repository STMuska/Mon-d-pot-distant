<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
include 'db.php';

// var_dump($_GET["id"]);

$artist = getArtist($_GET["id"]);
?>

    <form action="script_modif.php" method="POST">
        <h1>Mise à jour de la fiche "<?= $artist->artist_name ?>"</h1>
        <input type="hidden" name="id" value="<?= $artist->artist_id ?>">
        <input type="text" name="nom" id="name" placeholder="Nom" value="<?= $artist->artist_name ?>">
        <?php if (isset($_GET["errNom"]) ) { ?>
            <small style="color: red;">Veuillez renseigner le nom de l'artiste</small>
        <?php } ?>

        <br>
        <input type="text" name="url" id="url" placeholder="URL" value="<?= $artist->artist_url ?>">
                                                                                                                                              
        <br>
        <button type="submit">Mettre à jour l'artiste</button>
    </form>
</body>
</html>