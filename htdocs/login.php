<?php
    $title = "login";
    require "Includes/header.php";
?>
<link rel="stylesheet" href="../assets/Framework/bootstrap.css"/>
<!-- CSS File -->
    <style>
        body{
            background: #2e306c;
        }
        .section_1{
            margin-top: 0px;
            margin-bottom: 19px;
            height: 81vh;
        }
        a{
            text-decoration: none!important
        }
        .navbar .logo a {
            margin-right: 50px;
        }
        .navbar{
            background-color: #a5c0dd;
        }

        @media(max-width: 405px){
            .login{
                border-radius: 0px;
            }
        }

        @media(max-width:400px) {
            .section_1{
                margin-top:0px;        
            }
        }
    </style>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <?php
        require 'Includes/navbar.php' 
    ?>
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

    <?php require "Includes/footer.php" ?>

</body>
</html>