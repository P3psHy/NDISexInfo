<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Authentification2.css" />
    <title>C</title>

</head>

<body>

    <header>
            <a href="index.php">
                <img src="../support%20photo/autodraw_08_06_2022-removebg-preview.png" height="80" width="210">
            </a>
    </header>

    <main>

        

            <div class="container">

                <h2> veuillez renseignez votre Mot de passe : </h2>

                    <form method='POST' action='verification.php'>
                    <?php
                    session_start();
                    
                    $login=$_REQUEST['login'] ;

                    $_SESSION["MUID"]=$login ;
                    
                    ?>
                
                        <label>
                        <input type="password" name="mdp" placeholder="Renseignez votre Mot de passe">
                        </label>

                        <input type="hidden" name="login" value="<?php echo $login;?>"> 

        </br>
        </br>

                <button> Valider </button> 

                </form>

            </div>

        
        
    </main>
</body>

</html>