    <!-- footer section start -->
    <footer>
        <span>Créer par <a href="#">G..t...6. & .a..i..o.</a> | <span class="far fa-copyright"></span> 2022 Tout droit réservé.</span>
    </footer>

    <!-- For login files -->
    <script src="../assets/script.js"></script>
    <script>
        const chat = document.querySelector(".chat")
        const aside_droite = document.querySelector(".aside_droite")

        chat.addEventListener('click',()=>{
            aside_droite.classList.toggle('mobile-chat')
        })

        setInterval('load_messages()', 500);
        function load_messages(){
            $('#bod').load('../bloc-chat.php')
        }
    </script>


    <!-- FOR CARD FILES -->
    <!-- <script src="/assets/script.js"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
