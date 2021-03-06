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
        <div class="logo"><a href="#">Gnogué <span>City.</span></a></div>
        <ul class="menu">
            <li><a href="/index.php#home" class="menu-btn">home</a></li>
            <li><a href="/index.php#about" class="menu-btn">About</a></li>
            <li><a href="/index.php#services" class="menu-btn">Dernier-post</a></li>
            <li><a href="/index.php#teams" class="menu-btn">teams</a></li>
            <?= nav_item('/login.php', 'Connexion', "../login.php");?>
            <?= nav_item('/signin.php', 'Inscription', "../signin.php");?>

        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>