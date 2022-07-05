<!DOCTYPE html>
<html lang="en">
    <?php include 'Includes\head.php';?>
    <link rel="stylesheet" type="text/css" href="log_sing.css">
    <link href="assets/Framwork/Bootstrap/bootstrap.min.css"/>
    <!-- Separateur head et body -->


    <body>
        <main>
            <section id="login" class="login py-5 bg-light">
                <div class="container animate__animated animate__backInRight animate__slowe">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <img src="img/logo.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-7 text-center py-5">
                            <h1 class="animate__animated animate__pulse animate__slowe animate__infinite">Bienvenue</h1>

                            <form action="">
                                <div class="form-row py-3 pt-5">
                                    <div class="offset-1 col-lg-10">
                                        <input type="text" class="inp px-3" placeholder="Pseudo" required>
                                    </div>
                                </div>
                                <div class="form-row py-2">
                                    <div class="offset-1 col-lg-10">
                                        <input type="text" class="inp px-3" placeholder="Mot de passe" required>
                                    </div>
                                </div>
                                <div class="form-row py-1">
                                    <div class="offset-1 col-lg-10">
                                        <p>Mot de passe oublié ? <a href="signup">OUI</a> </p>
                                    </div>
                                </div>
                                <div class="form-row py-1">
                                    <div class="offset-1 col-lg-10 px-3">
                                        <button class="btn1">Connexion</button>
                                    </div>
                                </div>
                                <div class="form-row py-3">
                                    <div class="offset-1 col-lg-10">
                                        <p>Vous avez un compte, alors <a href="signup.php">Connectez-vous</a> </p>
                                    </div>
                                </div>
                                <p>Connectez-vous avec vos réseaux sociaux</p>
                                <span><i class="fa-brands fa-facebook"></i></span>
                                <span><i class="fa-brands fa-google"></i></span>
                                <span><i class="fa-brands fa-instagram"></i></span>
                                <span><i class="fa-brands fa-twitter"></i></span>
                                <span><i class="fa-brands fa-snapchat"></i></span>
                            </form>
                        </div>                    
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
