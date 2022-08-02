# Projet-Forum
Mon premier projet git.
Reprise de projet.

# INFO
    Le dossier htdocs est le dossier principal du projet, il regroupe toute l’architecture du site (dossier et fichier nécessaire).

    "Action" est le dossier qui va regrouper toute les action PHP (tous les calculs et vérification PHP nécessaire).
    "Assets" est le dossier qui regroupe tous les fichier Css et JavaScript.
    "Includes" est un dossier qui contient des fichier PHP et qui permet d’éviter les répétitions comme par exemples au niveau du Head ou de Navbar.
    "img" est le dossier qui contient toute les images et les logos du site.

    Le dossier "info" est le dossier qui contient toute les information sur le site.
    ## Le fichier .gitignore permet de ne pas commtis les fichier non spécifier.

    ## Pour rajouter le Head il suffit d’qjouter le balise php suivante : 
    |      ‘‘<?php include 'Includes\head.php';?> ’’  
    |      Exemple :
    |           <!DOCTYPE html>
    |       <html lang="en">
    |           <?php include 'Includes\head.php';?>
    |           <link rel="stylesheet" type="text/css" href="assets/log.css">
    |           <Body>
    |               <!— Code-->
    |           </Body>
    |       </html>
    |
    |       Qui permet d’éviter les répétition dans les différents fichier.
    |           Fontionnement de cette balise :
    |           ‘‘<?php include 'Includes\head.php';?> ’’  
    |           Elle utilise un include pour injecter le contenue du fichier Includes\head.php' 
    |           dans toute les pages qui utilise cette balise php.
    |
    |  ATTENTION : Ne surtout pas introduire la balise dans les fichiers .php et .html, A la place utiliser la balise php 
    |             ‘‘<?php include Includes\head.php’’;?>.    Merci de ne pas oublier.


    ## Noublie pas de me donner une note sur le projet que je vien de terminer les notes varie de 0/5 à 5/5

    ## Je vous pris de Respecter les délais du planing.
    
    ## Avant de commence a bosser il faut faire un pull.


# Planing
   
    /*
    Date d'ajout: 13/07/2022 
    Motif: Création de la page forgot password qui doit être ultra responsive et Création du card profil qui doit être ultra responsive.
    fichier:  Créer de nouveau fichier .php dans /htdocs
    Job de: # HASSIMIOU #
    Délais: 72H
    Statu: ......
    Date FIn:.....
    Qualiter:.....
    commentaires:.....
    */  

## Qualiter Et Commentaire
     /*
    Date d'ajout: 13/07/2022 
    Motif: creation du fomulaire d'inscription backand et bdd
    fichier: actions/deconex-conex/traitementSignup.php
    Job de: # PELLEL #
    Délais: 72H
    Statu: Fin
    Date FIn:25/07/2022
    Qualiter:.....
    commentaires:.....
    */ 
   
    /*
    Date d'ajout: 05/07/2022 
    Motif: Création de la page d'acceuille login signup et la navbar.
    fichier:  Créer un nouveau fichier .php dans /htdocs
    Job de: # PELLEL #
    Délais: 73 H T-48h
    Statu: Fin
    Date FIn: 10/07/2022
    Qualiter:.....
    commentaires:.....
    */
   
## HISTORIQUE

