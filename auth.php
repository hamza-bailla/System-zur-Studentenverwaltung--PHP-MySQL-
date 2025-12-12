<?php
session_start();
$L = $_GET['logine'];
$P = $_GET['motpasse'];



$bd = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
$req = 'SELECT * FROM compts';
$stet = $bd->query($req);
$rows = $stet->fetchAll(PDO::FETCH_ASSOC);
//var_dump($rows);
$a = false;
foreach ($rows as $row):
    if ($L == $row['login'] && $P == $row['password']) {
        $a = true;
        break;
    }
endforeach;
//$a=true;
if ($a == true) {
    $_SESSION['auth'] = $L;
    unset($_SESSION['erreur']);
    if (isset($_SESSION['page_courant']))
        header('location:' . $_SESSION['page_courant'] . '');
    else
        header("location:menu.php");
} else {
    //mauvais

    $_SESSION['erreur'] = "Login ou mot de passe incorrect !";
    header('location:index.php');
}
