<?php

try{
    $bdd = new PDO('mysql:host=localhost,dbname=examen','root',''); 
    
}catch(PDOException $E){
    echo"Hors connexion de la base de donnees!!" .$E->getMessage();
}

?>