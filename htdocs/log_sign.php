<?php
    $title = "Conexion et inscription";
    require "Includes/header.php";
?>
<body class="bod">
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <?php
        require 'Includes/menu.php' 
    ?>
    <section>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <!-- Log in -->
                    <form class="sign-in-form" action="POST">
                        <h2 class="titre">Connexion</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="login_pseudo" placeholder="Pseudo" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-look"></i>
                            <input type="password" name="login_password" placeholder="Mot de passe" required>
                        </div>
                        <input type="submit" value="Conexion" class="btn solid">
                        <p class="social-text sc" ><a class='forget' href="#" class="">Mot de passe oublié</a></p>
                        <p class="social-text">Incrivez-vous avec vos plateforme social</p>
                        <div class="social-media">
                            <a href="" class="social-icon">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="" class="social-icon">
                                <i class="fab fa-Linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                     <!-- Sign up  -->
                    <form class="sign-up-form" action="POST">


                        <?php require_once 'actions/inscrip-connex-deconnex/traitementSignup.php'?>


                        <h2 class="titre">Inscription</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="pseudo" placeholder="Pseudo" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <!-- <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="number" placeholder="Tel" required>
                        </div> -->
                        <div class="input-field">
                            <i class="fas fa-look"></i>
                            <input type="password" name="password" placeholder="Mot de passe" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-look"></i>
                            <input type="password" name="c-pass" placeholder="Confirmer le mot de passe" required>
                        </div>
                        <input type="submit" name="validate" value="Inscription" class="btn solid">
                        <p class="social-text">Incrivez-vous avec vos plateforme social</p>
                        
                        <div class="social-media">
                            <a href="" class="social-icon">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="" class="social-icon">
                                <i class="fab fa-Linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Nouveau ici ?</h3>
                        <p>Vous êtes nouveau ici, alors ne perdez pas le temps cliquer sur le bouton pour vous inscrire.</p>
                        <button class="button btn transparent" id="sign-up-btn">Inscrivez-vous</button>
                    </div>
                    <img src="images/undraw_mobile_login_re_9ntv.svg" alt="Svg_image" class="image">
                </div>
                <div class="panel right-panel">
                    <div class="content content-conect">
                        <h3>L'un d'entre nous ?</h3>
                        <p>Vous avez déjà intégré la communauté, alors cliquer sur le bouton pour vous connecter avec votre compte.</p>
                        <button class="btn transparent" id="sign-in-btn">Connectez-vous</button>
                    </div>
                    <img src="images/undraw_secure_login_pdn4.svg" alt="Svg_image" class="image">
                </div>
            </div>
        </div>
    </section>
<?php require "Includes/footer.php" ?>
