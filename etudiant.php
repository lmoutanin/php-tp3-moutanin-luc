<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Etudiant {$_GET['id']}"; ?></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<p> Informations concernant l'étudiant :</p>
 <?php 

if (isset($_GET['id'])) {
    echo " Son identifiant est {$_GET['id']}.";
    }else{
        echo "Désolé, aucun identifiant fourni.";
    }
 
 
 ?>
</body>
</html>