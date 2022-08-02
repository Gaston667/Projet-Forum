<?php
    $msgError = null;
    $title = "login";
    require "Includes/header.php";
    require_once "actions/inscrip-connex-deconnex/traitementLogin.php"
?>
<link rel="stylesheet" href="/assets/LS_style.css">
<style>
    .navbar{
        position: fixed;
        width: 100%;
        z-index: 999;
        padding: 30px 0;
        font-family: 'Ubuntu', sans-serif;
        transition: all 0.3s ease;
        background: #5f5dd0;
    }  
    footer{
        background: #5f5dd0;
        padding: 15px 23px;
        color: #fff;
        text-align: center;
    } 
    footer span a{
        color: #fff;
        text-decoration: none;
    }
    .login-container {
        max-width: 450px;
        padding: 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 100px;
    }
    .msg{
        color: red;
        font-size: 1.2em;
    }
</style>
<body>
    <?php
        require 'Includes/menu.php' 
    ?>
    <main>
        <div class="side">
            <img src="../images/svg/img.svg" alt="">
        </div>
    
        <div class="main">
            <div class="login-container">
                <p class="titre">Content de vous revoir</p>
                <div class="separator"></div>
                <p class="welcome-message">
                    Veuillez fournir les informations d'identifications de connexion pour continuer et avoir accès à tous nos services. Merci.
                </p>
            
                <form class="login-form" method="POST">
                    <div class="form-control">
                        <input type="text" name="pseudo" placeholder="Pseudo">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-control">
                        <input type="password" name="password" placeholder="password">
                        <i class="fas fa-lock"></i>
                    </div>
                    <p class="msg"><?= $msgError ?></p>

                
                    <button class="submit" name="validate">Connexion</button>
                </form>
            </div>
        </div>
    </main>
<?php require "Includes/footer.php" ?>