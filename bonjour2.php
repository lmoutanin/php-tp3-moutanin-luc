
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<form action="bonjour2.php" method="post">

<fieldset>
<legend> Entrez votre Prénom :</legend> 
<input type="text" name="prenom" size="20" required />
</fieldset>


<fieldset>
  <legend>Langue</legend>
 
  <div>
    <input type="radio" id="Bonjour" name="langue" value="Bonjour" checked  />
    <label for="français">Français</label>
    <input type="radio" id="Bonzou" name="langue" value="Bonzou" />
    <label for="creole">Créole</label>
  </div>
</fieldset>

<fieldset>
    <br>
  <legend>Civilité</legend>
 
  <div>
    <input type="radio" id="Monsieur" name="civilite" value="Monsieur" checked />
    <label for="Monsieur">Monsieur</label>
    <input type="radio" id="Madame" name="civilite" value="Madame" />
    <label for="Madame">Madame</label>
  </div>
</fieldset>

<input type="submit" value="Dire bonjour" />
</form>
<?php 
 
echo "{$_POST['langue']} {$_POST['civilite']} {$_POST['prenom']}.";  

?>
</body>
</html>