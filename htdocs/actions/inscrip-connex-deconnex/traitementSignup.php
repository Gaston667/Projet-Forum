<?php
// ligne qui permet de en quelque sorte d'importer le fichier BDD.php
require('actions\BDD.php');


// Pour verifier si il a cliquer le sur valider :
    // on verifier si la variable validate existe
    // validation du formulair
if (isset($_POST['validate'])){

    // verifier si user a bien complter tout les champs
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['c-pass'])){

        // verifier si le mot de passe est identique au confirme password
        if($_POST['c-pass'] === $_POST['password']){

            // Les donnée de l'utilisateur
            $user_pseudo = htmlspecialchars($_POST['pseudo']);
            $user_email = htmlspecialchars($_POST['email']);
            $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // verifier l'utilisateur existe deja sur le site
            $checkIfUserAlreadyExists_P = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ? ');
            $checkIfUserAlreadyExists_P->execute(array($user_pseudo));

            if($checkIfUserAlreadyExists_P->rowCount() === 0){

                $checkIfUserAlreadyExists_E = $bdd->prepare('SELECT email FROM users WHERE email = ? ');
                $checkIfUserAlreadyExists_E->execute(array($user_email));
                if($checkIfUserAlreadyExists_E->rowCount() === 0){
                    // Inserer l'utilisateur dans la bdd
                    $insertUserOnWebbsite = $bdd->prepare('INSERT INTO users(pseudo, email, password)VALUES(?, ?, ?)');
                    $insertUserOnWebbsite->execute(array($user_pseudo, $user_email, $user_password));

                    // Récupérer les informations de l'utilisateur
                    $getInfoOfThisUserReq = $bdd->prepare('SELECT id, pseudo, email FROM users WHERE pseudo = ? and email = ?');
                    $getInfoOfThisUserReq->execute(array($user_pseudo, $user_email));

                    $usersInfos =$getInfoOfThisUserReq->fetch();

                    // Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globals session
                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $usersInfos['id'];
                    $_SESSION['pseudo'] = $usersInfos['pseudo'];
                    $_SESSION['email'] = $usersInfos['email'];
                    
                    // Rediriger l'utilisateur vers la page forum.
                    header('Location: forum.php');
                }else{
                    $msgError="Cet email existe déjà sur le site.";
                }
            }else{
                $msgError= "Ce pseudo existe déjà sur le site.";

            }
        }
        else{
            $msgError= "Votre mot de passe ne corespond pas au mot de passe Entrez au niveau de confirme password
            .";
        }
    }else{
        $msgError ="Veuillez remplire les champs svp";
    }
}