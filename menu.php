<?php
session_start();
if (!isset($_SESSION['auth']))
    header('location:index.php');

$f = $_SESSION['auth'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.menu.css">

</head>

<body>
    <div>
        <a href="frmconsultation.php">Consultation</a>
        <a href="ajout.php">Saisie</a>
        <a href="deconnexion.php">Deconnexion<?php echo " ".$f ?></a>
    </div>
</body>

</html>