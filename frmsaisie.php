<pre>
<?php

session_start();
if (!isset($_SESSION['auth']))
    header('location:index.php');


$N = $_POST['nom'];
$E = $_POST['email'];
$C = $_POST['controle'];
$P = $_POST['projet'];
$EX = $_POST['examen'];

try {
    //$bdd = new PDO('mysql:host=localhost,dbname=examen', 'root', '');
    $bdd = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
} catch (PDOException $E) {
    echo "Hors connexion de la base de donnees!!" .$E->getMessage();
}

$req = "INSERT etudiants SET Nom=:N,Email=:E,Controle=:C,Projet=:P,Examen=:EX";
$stet = $bdd->prepare($req);
$stet->bindValue(':N', $N, PDO::PARAM_STR);
$stet->bindValue(':E', $E, PDO::PARAM_STR);
$stet->bindValue(':C', $C, PDO::PARAM_INT);
$stet->bindValue(':P', $P, PDO::PARAM_INT);
$stet->bindValue(':EX', $EX, PDO::PARAM_INT);
$stet->execute();

header('location:frmconsultation.php');
?>