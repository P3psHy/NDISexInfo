<?php
    session_start();

    if(!isset($_SESSION['id']) && !isset($_SESSION['mdp'])){
        $_SESSION['erreurConnect']=false;
        header("location: connect_id.php");
    }
        include "header.php" ;
?>
    

<body>

    <?php
        include "navbar.php" ; 
        include "fond.php";
    ?>

    <div class="titre">
        <h3>Informations</h3>
    </div>

    <div class="central_div">
        <div class="info_site">
            <h4>Informations à propos de notre site</h4>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, recusandae, quaerat molestiae exercitationem ut architecto laborum labore rem neque quo inventore, in quod nesciunt soluta optio nostrum necessitatibus sint harum.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur jjjadipisicing elit. Quas, error velit nam dicta deserunt omnis. Mollitia, obcaecati ipsa eveniet alias facere omnis ipsum, sit iusto nulla quisquam quaerat, reiciendis perspiciatis!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur jjjadipisicing elit. Reprehenderit, quisquam debitis laborum tempora facere autem dolor blanditiis, dicta vitae sit eaque voluptatem temporibus enim, ullam impedit beatae! Id, molestiae at.</p>
        </div>
        <div class="lien">
        <h4>Liens utiles :</h4>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, recusandae, quaerat molestiae exercitationem ut architecto laborum labore rem neque quo inventore, in quod nesciunt soluta optio nostrum necessitatibus sint harum.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur kkkadipisicing elit. Quas, error velit nam dicta deserunt omnis. Mollitia, obcaecati ipsa eveniet alias facere omnis ipsum, sit iusto nulla quisquam quaerat, reiciendis perspiciatis!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, quisquam debitis laborum tempora facere autem dolor blanditiis, dicta vitae sit eaque voluptatem temporibus enim, ullam impedit beatae! Id, molestiae at.</p>
        </div>
        <div class="savoir_plus">
            <h4>Pour en savoir plus</h4>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur nnadipisicing elit. Aliquam, recusandae, quaerat molestiae exercitationem ut architecto laborum labore rem neque quo inventore, in quod nesciunt soluta optio nostrum necessitatibus sint harum.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, error velit nam dicta deserunt omnis. Mollitia, obcaecati ipsa eveniet alias facere omnis ipsum, sit iusto nulla quisquam quaerat, reiciendis perspiciatis!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, quisquam debitis laborum tempora facere autem dolor blanditiis, dicta vitae sit eaque voluptatem temporibus enim, ullam impedit beatae! Id, molestiae at.</p>
        </div>
        
    </div>
          
</body>     
</html>

