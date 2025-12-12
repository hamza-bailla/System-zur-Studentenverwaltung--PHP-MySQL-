<pre>
<?php
session_start();


$rows = $_SESSION['rows'] ?? [];
$selected = $_SESSION['selected'] ?? "tous";


try {
    //$bdd = new PDO('mysql:host=localhost,dbname=examen', 'root', '');
    $bdd = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
} catch (PDOException $E) {
    echo "Hors connexion de la base de donnees!!" . $E->getMessage();
}

// $req = "SELECT Id, Nom, Email, Controle, Projet, Examen,(25*Controle + 15*Projet + 60*Examen)/100 AS Moyenne FROM etudiants;";
// $stet = $bdd->query($req);
// $rows = $stet->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div >
    <a href="frmconsultation.php">Consultation</a> <a href="ajout.php">Saisie</a><a href="deconnexion.php">Deconnexion<?php echo "admin" ?></a>
    </div> 
    <h2>Recherche des etudiants</h2>
    <table border="1" width="75%">
        <th>Recherche</th>
        <th>
            <form action="selection.php" method="post">
                <select name="selected">
                <option value="tous">Tous les etudiants</option>
                <option value="Admis">Les etudiants Admis</option>
                <option value="Ajournes">Les etudiants Ajournes</option>
            </select>
            </th>
                <th><input type="submit" value="chercher"></th>
        
            </form>
        
    </table>
    <h2>Liste des etudiants</h2>
    <table border="1" width="85%">
        <tr>
            <td align="center">Id</td><td align="center">Nom</td><td align="center">Email</td><td align="center">Controle</td><td align="center">Projet</td><td align="center">Examen</td><td align="center">Moyenne Generale</td>
        </tr>
        <?php foreach ($rows as $row): ?>
            <tr>
            <td><?php echo $row['Id'] ?></td>
            <td><?php echo $row['Nom'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['Controle'] ?></td>
            <td><?php echo $row['Projet'] ?></td>
            <td><?php echo $row['Examen'] ?></td>
            <td><?php echo $row['Moyenne'] ?></td>      
            </tr>         
        <?php endforeach; ?>

    </table>
    
</body>
</html>