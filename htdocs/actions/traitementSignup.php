<?php
// ligne qui permet de en quelque sorte d'importer le fichier BDD.php
// require('actions\BDD.php');


// Pour verifier si il a cliquer le sur valider :
    // on verifier si la variable validate existe
if (isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['con_password'])){

    }else{
        $msgError= "Veuillez entrez les informations demander";
    }
}