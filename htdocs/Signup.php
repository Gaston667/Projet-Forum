<?php require "actions/traitementSignup.php" ?>
<!DOCTYPE html>
<html lang="en">
<title>Gnogué - sign up</title>
<?php include "Includes/head.php" ?>
<link rel="stylesheet" href="assets/log.css">

<!-- CSS File -->
<style>
    body{
        background: #2e306c;
    }
    .section_1{
        margin-top:83px;
        height: 90vh;
        
    }
    
    @media screen and (max-width:400px) {
        .section_1{
            margin-top:95px;        
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
            <?php if (isset($msgError)){echo "<p>$msgError</p";}?>              
            

            <div class="form-group was-validated">
                <label class="form-label" for="pseudo">Pseudo</label>
                <input class="form-control" type="text" name="pseudo"  placeholder="N'utiliser pas vortre nom propre" required>
                <div class="invalid-feedback">
                    Veuillez saisir votre pseudo
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="email">Adresse mail</label>
                <input class="form-control" type="email" name="email" required>
                <div class="invalid-feedback">
                    Veuillez saisir votre adresse gmail
                </div>
            </div>
            <!-- <div class="form-group was-validated">
                <label class="form-label" for="number-phone">Numéro de télephone</label>
                <input class="form-control" type="text" name="number-phone" required>
                <div class="invalid-feedback">
                    Veuillez entrer votre numero de télephone
                </div>
            </div> -->
            <div class="form-group was-validated">
                <label class="form-label" for="password">Mot de passe</label>
                <input class="form-control" type="password" name="password" required>
                <div class="invalid-feedback">
                    Veuillez entrer votre mot de passe
                </div>
            </div>
            <!-- <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div> -->
            <div class="form-group was-validated">
                <label class="form-label" for="con_password">Comfirmer mot de passe</label>
                <input class="form-control" type="con_password" id="con_password" required>
                <div class="invalid-feedback">
                    Veuillez confirmer votre mot de passe
                </div>
            </div>

            <div class="form-group was-validated">
                <p class="p">Vous avez un Compte, alors <a class="ap_2" href="login.php">Connectez-vous</a></p>
            </div>
            <button class="btn btn-success w-100" type="submit" name="validate">Connectez-vous</button>
        </form>

        </div>
    </section>
</body>
</html>
