<?php
    function nav_item( string $lien, string $titre, string $href): string 
    {   $code_html = '';
        if ($_SERVER['SCRIPT_NAME'] !== $lien) {
           $code_html ='<li><a href='.$href.' class="menu-btn">'.$titre.'</a></li>';
        }        
        return $code_html;
    }
?>



<nav class="navbar">
    <div class="max-width">
        <div class="logo"><a href="#">Gnogué <span>City.</span></a></div>
        <ul class="menu">
            <?= nav_item('/index.php', 'home', "/index.php#home");?>
            <li><a href="/index.php#about" class="menu-btn">About</a></li>
            <li><a href="/index.php#services" class="menu-btn">Dernier-post</a></li>
            <!-- <li><a href="../login.php" class="menu-btn">conexion</a></li> -->
            <li><a href="/index.php#teams" class="menu-btn">teams</a></li>
            <?= nav_item('/login.php', 'Connexion', "../login.php");?>

        </ul>
        <div class="menu-btn">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>