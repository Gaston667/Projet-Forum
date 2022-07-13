<?php
// ligne qui permet de en quelque sorte d'importer le fichier BDD.php
require('actions\BDD.php');


// Pour verifier si il a cliquer le sur valider :
    // on verifier si la variable validate existe
if (isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['c-pass'])){
        if($_POST['c-pass'] === $_POST['password']){
            $user_pseudo = htmlspecialchars($_POST['pseudo']);
            $user_email = htmlspecialchars($_POST['email']);
            $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
            $checkIfUserAlreadyExists->execute(array($user_pseudo));

            if($checkIfUserAlreadyExists->rowCount() === 0){
                $insertUserOnWebbsite = $bdd->prepare('INSERT INTO users(pseudo, email, password)VALUES(?, ?, ?)');
                $insertUserOnWebbsite->execute(array($user_pseudo, $user_email, $user_password));

            }else{
                $msgError= "Ce pseudo existe déjà sur le site.";

            }
        }
        else{
            $msgError= "Votre mot de passe est invalide. Veuillez Entrez le vrai mot de passe.";
        }
    }
}