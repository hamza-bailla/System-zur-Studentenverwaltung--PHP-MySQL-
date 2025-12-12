<?php
session_start();
if (!isset($_SESSION['auth']))
    header('location:index.php');
$SELCTED = $_POST['selected'];

try {
    //$bdd = new PDO('mysql:host=localhost,dbname=examen', 'root', '');
    $bdd = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
} catch (PDOException $E) {
    echo "Hors connexion de la base de donnees!!" . $E->getMessage();
}


if ($SELCTED == "tous") {
    $req = "SELECT *, 
    (25*Controle + 15*Projet + 60*Examen)/100 AS Moyenne
    FROM etudiants 
    ORDER BY Moyenne DESC";
} elseif ($SELCTED == "Admis") {
    $req = "SELECT *, 
    (25*Controle + 15*Projet + 60*Examen)/100 AS Moyenne
    FROM etudiants
    HAVING Moyenne >= 12
    ORDER BY Moyenne DESC";
} elseif ($SELCTED == "Ajournes") {
    $req = "SELECT *, 
    (25*Controle + 15*Projet + 60*Examen)/100 AS Moyenne
    FROM etudiants
    HAVING Moyenne < 12
    ORDER BY Moyenne ASC";
}

// SAUVEGARDE POUR LA PAGE frmConsultation
$rows = $bdd->query($req)->fetchAll();
$_SESSION['rows'] = $rows;
$_SESSION['selected'] = $SELCTED;
header('location:frmconsultation.php');
exit();
