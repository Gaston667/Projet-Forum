<?php
// Essaye de se conecter a la bdd
try{$bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root', 'root');}
// si il ne parvient pas a ce connecter il affiche un die (message d'erreur)
catch(Exception $e){
    die('Une erreure a été trouvée: '.$e->getMessage());
}



