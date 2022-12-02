<?php
    session_start();

    if(!isset($_SESSION['id']) && !isset($_SESSION['mdp'])){
        $_SESSION['erreurConnect']=false;
        header("location: connect_id.php");
    }else{

        ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SexInfo | Accueil</title>
    <link href="informations.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

    <div class="container text-center">
        <div class="col_change_color"><h1>SEXINFO</h1></div>
    </div> 

    <div class="nav_content rounded-pill">
        <div class="container text-center">
            <div class="row">
            <div class="col">
                <a href="accueil.html" class="text-decoration-none text-dark">Accueil</a>
            </div>
            <div class="col">
                <a href="jeux.html" class="text-decoration-none text-dark">Jeux</a>
            </div>
            <div class="col">
                <a href="informations.html" class="text-decoration-none text-dark">Informations</a>
            </div>
            <div class="col">
                <a href="informations.html" class="text-decoration-none text-dark">F.A.Q</a>
            </div>
            <div class="col">
                <a href="inscription.php" class="text-decoration-none text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </a>
            </div>
            </div>
        </div>
    </div>

    <div class="titre">
        <h3>Informations</h3>
    </div>

    <div class="central_div">
        <div class="info_site">
            <h4>Informations à propos de notre site</h4>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, recusandae, quaerat molestiae exercitationem ut architecto laborum labore rem neque quo inventore, in quod nesciunt soluta optio nostrum necessitatibus sint harum.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, error velit nam dicta deserunt omnis. Mollitia, obcaecati ipsa eveniet alias facere omnis ipsum, sit iusto nulla quisquam quaerat, reiciendis perspiciatis!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, quisquam debitis laborum tempora facere autem dolor blanditiis, dicta vitae sit eaque voluptatem temporibus enim, ullam impedit beatae! Id, molestiae at.</p>
        </div>
        <div class="lien">
        <h4>Lien utile</h4>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, recusandae, quaerat molestiae exercitationem ut architecto laborum labore rem neque quo inventore, in quod nesciunt soluta optio nostrum necessitatibus sint harum.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, error velit nam dicta deserunt omnis. Mollitia, obcaecati ipsa eveniet alias facere omnis ipsum, sit iusto nulla quisquam quaerat, reiciendis perspiciatis!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, quisquam debitis laborum tempora facere autem dolor blanditiis, dicta vitae sit eaque voluptatem temporibus enim, ullam impedit beatae! Id, molestiae at.</p>
        </div>
        <div class="savoir_plus">
            <h4>Pour en savoir plus</h4>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, recusandae, quaerat molestiae exercitationem ut architecto laborum labore rem neque quo inventore, in quod nesciunt soluta optio nostrum necessitatibus sint harum.</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, error velit nam dicta deserunt omnis. Mollitia, obcaecati ipsa eveniet alias facere omnis ipsum, sit iusto nulla quisquam quaerat, reiciendis perspiciatis!</p>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, quisquam debitis laborum tempora facere autem dolor blanditiis, dicta vitae sit eaque voluptatem temporibus enim, ullam impedit beatae! Id, molestiae at.</p>
        </div>
        
    </div>
          
</body>
</html>


<?php
        }
?>
