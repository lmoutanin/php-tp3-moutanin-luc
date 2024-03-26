<?php
require "filtre.php";


$code= filtrechar('code');
 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>code </title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php echo "le code du service choisi est : $code .";  ?>
</body>

</html>