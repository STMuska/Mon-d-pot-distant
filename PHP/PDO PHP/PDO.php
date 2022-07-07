<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
    <a href="create.php">Ajouter</a>
    <?php
    include 'db.php';
    $mesDiscs = listArtists();
    $db = ConnexionBase();
    $requete = $db->prepare("SELECT * FROM disc JOIN artist ON disc.artist_id = artist.artist_id");
    $requete -> execute();
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    ?>
    <div class="row col-">
    <?php
foreach($tableau as $PDO){
    ?>
    <div class="card border-0 align-left col-4" id="card" style="width: 30%;">
<div class="row col">
<img class="col-6 max-width:20%" src="jaquettes/<?= $PDO -> disc_picture; ?>" alt="<?= $PDO -> disc_picture;?>" title =" <?= $PDO->disc_title; ?>">
<div class="card-body col-">
                        <p class="card-title text-right col-"><small><b><?= $PDO->disc_title; ?></b></small>
                        <p class="card-subtitle text-right col-" id="artistName"><?= $PDO->disc_label; ?> </p>
                        <?= '<p cass="card-text text-right col-"><small><b>Année : </b>' .$PDO->disc_year . '</p></small>';?>
                        <?= '<p cass="card-text text-right col-"><small><b>Style : </b>' .$PDO->disc_genre . '</small></br>';?>
                        <a href="update.php?id=<?php echo $PDO->disc_id; ?>" id="Btn_details" class="btn btn-primary col-">Details</a>

</div>
</div>
</div>
<?php
}
?>





    </div>
    </div>
    
</body>
</html>