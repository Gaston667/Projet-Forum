<?php 
    $title = "Signup";
    require "Includes/header.php";
?>
<link rel="stylesheet" href="../assets/Framework/bootstrap.css"/>
 
    <!-- CSS File -->
    <style>
        body{
            background: #2e306c;
        }
        .section_1{
            margin-top:0px;
            height: 90vh;
        
        }   
        a{
            text-decoration: none!important
        }

        @media(max-width: 405px){
            .login{
                border-radius: 0px;
            }
        }
    
        @media screen and (max-width:400px) {
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

    <?php require "Includes/footer.php" ?>

</body>
</html>
