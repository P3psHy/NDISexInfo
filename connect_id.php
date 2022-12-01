<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="connect_id.css" />
    <title>SexInfo | Connexion</title>

</head>
    <body>
        <header>
        </header>

        <main>
        <?php 
        session_start();

        $_SESSION['erreurConnect']=false;

        if(isset($_SESSION['erreurConnect']) || $_SESSION['erreurConnect'])
        {
            echo "<p> Login ou mot de passe incorect </p>" ;
        }
        
        
        ?>
            <div class="container">
                <h2> veuillez renseignez votre identifiant : </h2>

                    <form method='POST' action='connect_mdp.php'>
                    
                        <label>
                            <input type="email" name="id" placeholder="Renseignez votre Adresse email" required>
                        </label>
            
                        <button> Valider </button> 

                    </form>
            </div>
        </main>
    </body>
</html>