<?php
// ligne qui permet de en quelque sorte d'importer le fichier BDD.php
require('actions\BDD.php');

// Pour verifier si il a cliquer le sur valider :
    // on verifier si la variable validate existe
    // validation du formulair
if (isset($_POST['validate'])){
    // verifier si user a bien complter tout les champs
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
        
        // Les donnée de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        // verifier si user existe (si pseudo existe)
        $cheickIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $cheickIfUserExists->execute(array($user_pseudo));
        if($cheickIfUserExists->rowCount() > 0){

            // Recuperer les deonnes du user
            $usersInfos = $cheickIfUserExists->fetch();

            // Verifier si le mot de pass est correct (si il existe dans la base de donnee)
            if(password_verify($user_password, $usersInfos['password'])){
                
                // Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globals session
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                $_SESSION['email'] = $usersInfos['email'];

                // Rediriger l'utilisateur vers la page forum.
                header('Location: forum.php');

            }else{
                $msgError = "Votre mot de passe est incorrect... <br> Veuillez resayer, merci.";
            }
        }else{
            $msgError = "Votre pseudo est incorrect....";
        }
    }else{
        $msgError ="Veuillez remplire les champs svp";
    }
}