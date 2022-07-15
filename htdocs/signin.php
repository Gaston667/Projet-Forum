<?php
    $title = "login";
    $msgError = null;
    require "Includes/header.php";
    require_once "actions/inscrip-connex-deconnex/traitementSignup.php"
?>
<link rel="stylesheet" href="../assets/LS_style.css">
<style>
    .navbar{
        position: fixed;
        width: 100%;
        z-index: 999;
        padding: 30px 0;
        height: 80px;
        font-family: 'Ubuntu', sans-serif;
        transition: all 0.3s ease;
        background: #5f5dd0;
    }  
    footer{
        background: #5f5dd0;
        padding: 15px 23px;
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
        margin-top: 160px;
    } 
</style>
<body>
    <?php
        require 'Includes/menu.php' 
    ?>
    <main>
        <div class="side">
            <img src="/images/svg/undraw_secure_login_pdn4.svg" alt="">
        </div>
    
        <div class="main">
            <div class="login-container">
                <p class="titre">Content de te revoir</p>
                <div class="separator"></div>
                <p class="welcome-message">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi soluta deleniti
                     doloremque quos pariatur rem incidunt quibusdam saepe perferendis consequuntur?</p>
            
                <form class="login-form" method="POST">

                    <p><?= $msgError ?></p>

                    <div class="form-control">
                        <input type="text" name="pseudo" placeholder="Pseudo">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="email">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="form-control">
                        <input type="password" name="password" placeholder="password">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="form-control">
                        <input type="password" name="c-pass" placeholder="Confirm the Password">
                        <i class="fas fa-lock"></i>
                    </div>
        
                    <button class="submit" name="validate">Inscription</button>
                </form>
            </div>
        </div>
    </main>
<?php require "Includes/footer.php" ?>