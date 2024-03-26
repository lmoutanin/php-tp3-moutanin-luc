<?php
require "filtre.php";
$langue = filtrechar('langue');
$civilite = filtrechar('civilite');
$prenom = filtrechar('prenom');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reponse</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php
    echo "$langue $civilite $prenom";
    ?>
</body>

</html>