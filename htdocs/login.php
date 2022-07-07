<!DOCTYPE html>
<html lang="en">
<title>Gnogué - login</title>
<?php include "Includes/head.php" ?>

<!-- CSS File -->
<link rel="stylesheet" href="assets/log.css">
<style>
    body{
        background: #2e306c;
    }
    .section_1{
        margin-top:100px;
    }
</style>
<body>
    <header>
        <?php include "Includes/navbar.php" ?>
    </header>
    <section class="section_1">
        <div class="login">

        <h1 class="text-center">Bienvenue!</h1>

        <form class="needs-validation" method="POST">
            <div class="form-group was-validated">
                <label class="form-label" for="pseudo">Pseudo</label>
                <input class="form-control" type="text" id="pseudo" required>
                <div class="invalid-feedback">
                    Veuillez saisir votre pseudo
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Mot de passe</label>
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Veuillez saisir votre mot de passe
                </div>
            </div>
            <!-- <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div> -->
            <div class="form-group was-validated">
                <p class="p">Mot de passe oublié ? <a class="ap" href="">OUI</a></p>
            </div>

            <div class="form-group was-validated">
                <p class="p">Vous n'avez pas de Compte, alors <a class="ap_2" href="Signup.php">Inscrivez-vous</a></p>
            </div>
            <input class="btn btn-success w-100" type="submit" value="Connectez-vous">
        </form>

        </div>
    </section>
</body>
</html>