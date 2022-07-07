<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if (isset($_GET["err"]) && $_GET["err"] == 500) { ?>
    <span style="color: red;">OUPS !! L'enregistrement a échoué ...</span>
<?php } ?>

<form action="script_artist_ajout.php" method="POST">
    <h1>Nouvel artiste</h1>
    <input type="text" name="Title" id="Title" placeholder="Enter Title"> <br>
    <select name="menu_destination">
          <option value="Neil Young">Neil Young</option>
          <option value="YES">YES</option>
          <option value="Rolling Stones">Rolling Stones</option>
          <option value="Queens of the Stone Age">Queens of the Stone Age</option>
          <option value="Serge Gainsbourg">Serge Gainsbourg</option>
          <option value="AC/DC">AC/DC</option>
          <option value="Marillion">Marillion</Marquee></option>
          <option value="Bob Dylan">Bob Dylan</option>
          <option value="Fleshtones">Fleshtones</option>
          <option value="The CLash">The clash</option>
     </select> <br>
     <input type="text" name="Year" id="Year" placeholder="Enter Year"><br>
     <input type="text" name="Genre" id="Genre" placeholder="Enter genre (Rock, Pop, Prog ...)"><br>
     <input type="text" name="Label" id="Label" placeholder="Enter laber (EMI, Warner, PolyGram, Univers sale ...)"><br>
     <input type="text" name="Price" id="Price" placeholder="">
       <?php if (isset($_GET["errNom"]) ) { ?>
        <small style="color: red;">Veuillez renseigner le nom de l'artiste</small>
    <?php } ?>

    <br>
    <input type="text" name="url" id="url" placeholder="URL">
    <br>
    <button type="submit">Créer l'artiste</button>
</form>
</body>
</html>