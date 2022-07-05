<!DOCTYPE html>
<html lang="en">
    <?php include "Includes/head.php" ?>
    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="assets/log.css" />
    <link href="assets/Framwork/Bootstrap/bootstrap.min.css" />
    <title>Gnogué - Login</title>
    <body>
        <section class="log">
            <div class="login">

                <h1 class="text-center">Inscription</h1>

                <form action="">
                    
                    <div class="form-gourp">
                        <label classe="form-label" for="pseudo">Pseudo</label>
                        <input classe="form-control" type="text" id="pseudo">
                    </div>

                    <div class="form-gourp">
                        <label classe="form-label" for="email">Adresse mail</label>
                        <input classe="form-control" type="email" id="email">
                    </div>

                    <div class="form-gourp">
                        <label classe="form-label" for="numero-tel">Numero de telephone</label>
                        <input classe="form-control" type="text" id="numero-tel">
                    </div>

                    <div class="form-gourp">
                        <label classe="form-label" for="password">Mot de passe</label>
                        <input classe="form-control" type="password" id="password">
                    </div>
                    
                    <input classe="btn btn-success w-100 " type="Submit" value="Valider">
                </form>
            </div>
        </section>
    </body>
</html>

