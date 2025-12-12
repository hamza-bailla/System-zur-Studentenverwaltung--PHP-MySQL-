<?php
session_start();
if (!isset($_SESSION['auth']))
    header('location:index.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.saisie.css">

</head>

<body>
    <div>
        <a href="frmconsultation.php">Consultation</a> <a href="ajout.php">Saisie</a><a href="deconnexion.php">Deconnexion<?php echo "admin" ?></a>
    </div>
    <h3>Saisie des articles</h3>
    <table>
        <form action="frmsaisie.php" method="post">
            <tr>
                <th>Nom</th>
                <th><input type="text" name="nom"></th>
            </tr>
            <tr>
                <th>Email</th>
                <th><input type="text" name="email"></th>
            </tr>
            <tr>
                <th>Controle</th>
                <th><input type="text" name="controle"></th>
            </tr>
            <tr>
                <th>Projet</th>
                <th><input type="text" name="projet"></th>
            </tr>
            <tr>
                <th>Examen</th>
                <th><input type="text" name="examen"></th>
            </tr>
            <tr>
                <th><input type="submit" value="OK"></th>
                <th><input type="reset" name="Annuler"></th>
            </tr>
        </form>
    </table>
</body>

</html>