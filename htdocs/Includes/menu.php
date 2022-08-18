<?php
    function nav_item( string $lien, string $titre, string $href): string 
    {   $code_html = '';
        if ($_SERVER['SCRIPT_NAME'] !== $lien) {
           $code_html ='<li><a href='.$href.' class="menu-btn">'.$titre.'</a></li>';
        }        
        return $code_html;
    }
?>


<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
</div>
<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="index.php#home">Gnogué <span>City.</span></a></div>
        <ul class="menu">
            <li><a href="/index.php#home" class="menu-btn">Accueille</a></li>
            <li><a href="/index.php#about" class="menu-btn">à propos</a></li>
            <li><a href="/index.php#services" class="menu-btn">Dernier-post</a></li>
            <li><a href="/index.php#teams" class="menu-btn">équipe</a></li>
            <?php if ($_SERVER['SCRIPT_NAME'] !== '/forum.php'):?>
                <?= nav_item('/login.php', 'Connexion', "../login.php");?>
                <?= nav_item('/signin.php', 'Inscription', "../signin.php");?>
            <?php endif?>
            <?php if ($_SERVER['SCRIPT_NAME'] === '/forum.php'):?>
                <?= nav_item('/logout.php', 'Déconnexion', "..\actions\inscrip-connex-deconnex\logout.php");?>
            <?php endif?>

        </ul>
        <div class="chat">
        <ion-icon name="chatbubbles-outline"></ion-icon>
        <!-- <ion-icon name="logo-wechat"></ion-icon> -->
        </div>
        
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>