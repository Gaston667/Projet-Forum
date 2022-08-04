<?php
    $title = "Forum";
    require "Includes/header.php";
    // require "actions/security.php"
?>
<link rel="stylesheet" href="/assets/forum.css">
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
</style>
<body>
    <?php
        require 'Includes/menu.php' 
    ?>

    <section class="section">
    <div class="bntp"><a href="posty.php"><Button>Balancer une rumeur</Button></a></div>
    <div class="container_aside">
        <aside class="aside_gauche">
            <div class="container_product">
                <!-- {% for product in products %} -->
                <div class="card"> 
                    <div class="content">
                         <div class="details">
                             <h2>la terre est envehie<br><span>id #6</span></h2>
                             <div class="data">
                                 <h3>askip que dramer est un extra-terrestre.<!--<br><span>Prix</span>--></h3>
                                 <!-- <h3>{{ product.stock }}<br><span>Stock</span></h3>
                                 <h3 class="quality">A+<br><span>Quality</span></h3> -->
                             </div>
                             <div class="actionbtn">
                                <a href="{{ product.get_absolute_url }}"><button><span>8 </span>Info</button></a>
                                <a href="{% url 'add-to-cart_index' product.slug %}"><button><span>19 </span>Intox</button></a>                                   
                             </div>
                         </div>
                     </div>
                </div>    
                <div class="card"> 
                    <div class="content">
                         <div class="details">
                             <h2>{{ Titre du poste }}<br><span>id #6</span></h2>
                             <div class="data">
                                 <h3>Bongoura crush sur une fille de CM2.<!--<br><span>Prix</span>--></h3>
                                 <!-- <h3>{{ product.stock }}<br><span>Stock</span></h3>
                                 <h3 class="quality">A+<br><span>Quality</span></h3> -->
                             </div>
                             <div class="actionbtn">
                                <a href="{{ product.get_absolute_url }}"><button><span>8 </span>Info</button></a>
                                <a href="{% url 'add-to-cart_index' product.slug %}"><button><span>19 </span>Intox</button></a>                                   
                             </div>
                         </div>
                     </div>
                </div>   
                <div class="card"> 
                    <div class="content">
                        <div class="details">
                            <h2>{{ Titre du poste }}<br><span>id #4</span></h2>
                            <div class="data">
                                <h3>Marc pruvost a démission.<!--<br><span>Prix</span>--></h3>
                                <!-- <h3>{{ product.stock }}<br><span>Stock</span></h3>
                                <h3 class="quality">A+<br><span>Quality</span></h3> -->
                            </div>
                            <div class="actionbtn">
                               <a href="{{ product.get_absolute_url }}"><button><span>8 </span>Info</button></a>
                               <a href="{% url 'add-to-cart_index' product.slug %}"><button><span>19 </span>Intox</button></a>                                   
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="card"> 
                    <div class="content">
                        <div class="details">
                            <h2>{{ Titre du poste }}<br><span>id #4</span></h2>
                            <div class="data">
                                <h3>Marc pruvost a démission.<!--<br><span>Prix</span>--></h3>
                                <!-- <h3>{{ product.stock }}<br><span>Stock</span></h3>
                                <h3 class="quality">A+<br><span>Quality</span></h3> -->
                            </div>
                            <div class="actionbtn">
                               <a href="{{ product.get_absolute_url }}"><button><span>8 </span>Info</button></a>
                               <a href="{% url 'add-to-cart_index' product.slug %}"><button><span>19 </span>Intox</button></a>                                   
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="card"> 
                    <div class="content">
                        <div class="details">
                            <h2>{{ Titre du poste }}<br><span>id #4</span></h2>
                            <div class="data">
                                <h3>Marc pruvost a démission.<!--<br><span>Prix</span>--></h3>
                                <!-- <h3>{{ product.stock }}<br><span>Stock</span></h3>
                                <h3 class="quality">A+<br><span>Quality</span></h3> -->
                            </div>
                            <div class="actionbtn">
                               <a href="{{ product.get_absolute_url }}"><button><span>8 </span>Info</button></a>
                               <a href="{% url 'add-to-cart_index' product.slug %}"><button><span>19 </span>Intox</button></a>                                   
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="card"> 
                    <div class="content">
                        <div class="details">
                            <h2>{{ Titre du poste }}<br><span>id #4</span></h2>
                            <div class="data">
                                <h3>Marc pruvost a démission.<!--<br><span>Prix</span>--></h3>
                                <!-- <h3>{{ product.stock }}<br><span>Stock</span></h3>
                                <h3 class="quality">A+<br><span>Quality</span></h3> -->
                            </div>
                            <div class="actionbtn">
                               <a href="{{ product.get_absolute_url }}"><button><span>8 </span>Info</button></a>
                               <a href="{% url 'add-to-cart_index' product.slug %}"><button><span>19 </span>Intox</button></a>                                   
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="card"> 
                    <div class="content">
                        <div class="details">
                            <h2>Rapada<br><span>id #4</span></h2>
                            <div class="data">
                                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis, in suscipit praesentium quod accusantium laudantium et itaque modi quas necessitatibus explicabo expedita delectus nostrum ratione unde voluptas. Fuga quidem vel, rerum odio aspernatur porro harum 
                                est minus fugit accusantium facilis sapiente, sunt magni dicta eius officia molestias reiciendis non?<!--<br><span>Prix</span>--></h3>
                                <!-- <h3>{{ product.stock }}<br><span>Stock</span></h3>
                                <h3 class="quality">A+<br><span>Quality</span></h3> -->
                            </div>
                            <div class="actionbtn">
                               <a href="{{ product.get_absolute_url }}"><button><span>8 </span>Info</button></a>
                               <a href="{% url 'add-to-cart_index' product.slug %}"><button><span>19 </span>Intox</button></a>                                   
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </aside>
        <aside class="aside_droite">
            <div class="container_chat">
                <div class="heade">
                    <h1>WebChat</h1>
                </div>
                <div class="bod">
                    <p class="message">Salut!</p>
                    <p class="message user_message">ça va?</p>
                </div>
                <div class="foote">
                    <form action="">
                        <input type="text" name="">
                        <button>Envoyer</button>
                    </form>
                </div>
            </div>
        </aside>
    </div>
</section> 
    
<?php require "Includes/footer.php";?>
