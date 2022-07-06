<!DOCTYPE html>
<html lang="en">
<title>Document</title>
<?php include "Includes/head.php" ?>
<link rel="stylesheet" href="assets/log.css">

<!-- CSS File -->
<style>
    .section_1{
        margin-top:120px;
        height: 105vh;
        
    }
    
    @media (max-width:399px) {
        .section_1{
            margin-top:130px;
            height: 105vh;
        
        }
    }
</style>
<body>
    <header>
    <?php include "Includes/navbar.php" ?>
    </header>
    <section class="section_1">
        <div class="login">
        <form class="needs-validation">
            <h1 class="text-center">Bienvenue!</h1>
            <div class="form-group was-validated">
                <label class="form-label" for="pseudo">Pseudo</label>
                <input class="form-control" type="text" id="pseudo" required>
                <div class="invalid-feedback">
                    Veuillez saisir votre pseudo
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="email">Adresse gmail</label>
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Veuillez saisir votre adresse gmail
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="number-phone">Numéro de télephone</label>
                <input class="form-control" type="text" id="number-phone" required>
                <div class="invalid-feedback">
                    Veuillez entrer votre numero de télephone
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="email">Mot de passe</label>
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Veuillez entrer votre mot de passe
                </div>
            </div>
            <!-- <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div> -->
            <div class="form-group was-validated">
                <label class="form-label" for="email">Comfirmer mot de passe</label>
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Veuillez entrer votre mot de passe
                </div>
            </div>

            <div class="form-group was-validated">
                <p class="p">Vous avez un Compte, alors <a class="ap_2" href="login.php">Connectez-vous</a></p>
            </div>
            <input class="btn btn-success w-100" type="submit" value="Connectez-vous">
        </form>

        </div>
    </section>
</body>
</html>
