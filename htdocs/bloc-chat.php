<?php
$bdd = new PDO('mysql:host=localhost;dbname=gnogué;charset=utf8;', 'root', '');
session_start();
/*--------------
-------------------------------
<!-- <p class="pseudo user_pseudo"><?= $mess['pseudo'] ?><span>  #<?= $mess['id']?></span></p> -->

-----------------------------------------
----------- */
// SECTION LOAD MESSAGE
$recupmsg = $bdd->query('SELECT * FROM msgchat');
while($mess = $recupmsg->fetch()){
        ?>
            <div class="container_message">
                <?php if($mess['pseudo'] === $_SESSION['pseudo']):?>
                    <p class="message user_message"><?= $mess['message']?></p>
                <?php else:?>
                    <p class="pseudo"><?= $mess['pseudo'] ?><span>  #<?= $mess['id']?></span></p>
                    <p class="message"><?= $mess['message']?></p>
                <?php endif?>
                
            </div> 
            
    <?php
}
?>
