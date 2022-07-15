<?php
    $title = "Acceuille";
    require "Includes/header.php";
?>
<body>
    <?php
        require 'Includes/menu.php' 
    ?>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, bienvenue à</div>
                <div class="text-2">Gnogué City</div>
                <div class="text-3"><span class="typing"></span></div>
                <a href="signin.php">Inscrivez-vous</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
     <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="/images/img/Gnogué emoji.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Je suis un site <span class="typing-2"></span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
                    <a href="/signin.php">Inscription</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
      <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Les Dernières Rumeurs</h2>
            <div class="serv-content">
                
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                        <div class="text"><span>18</span> Info</div>
                        <div class="text"><span>1</span> Intox</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                        <div class="text"><span>18</span> Info</div>
                        <div class="text"><span>1</span> Intox</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                        <div class="text"><span>18</span> Info</div>
                        <div class="text"><span>1</span> Intox</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Loreml ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                        <div class="text"><span>18</span> Info</div>
                        <div class="text"><span>1</span> Intox</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                        <div class="text"><span>18</span> Info</div>
                        <div class="text"><span>1</span> Intox</div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
                        <div class="text"><span>18</span> Info</div>
                        <div class="text"><span>1</span> Intox</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact moi</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Entrez un contact</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nom</div>
                                <div class="sub-title">Anonymous boy</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adresse</div>
                                <div class="sub-title">Guinée, Conakry</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">abc@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Envoie moi un message</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Nom" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Sujet" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Envoyer le message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Ma teams</h2>
            <div class="carousel owl-carousel">
                <a href="../Profile_1.php">
                <div class="card">
                    <div class="box">
                        <video autoplay muted="" loop="infinite" src="/images/video/Gnogué (1).mp4" alt="">
                        <div class="text">Anonymous</div>
                        <p>Désolé, mais mon identité doit rester secrète.</p>
                    </div>
                </div>
                </a>
                <a href="../Profile_2.php">
                <div class="card">
                    <div class="box">
                        <video autoplay muted="" loop="infinite" src="/images/video/Gnogué (2).mp4" alt="">
                        <div class="text">Anonymous</div>
                        <p>Désolé, mais mon identité doit rester secrète.</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </section>

    

<?php require "Includes/footer.php" ?>