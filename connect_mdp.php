<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="connect_mdp.css" />
    <title>SexInfo | Connexion</title>

</head>
    <body>
        <header>
        </header>

        <main>
            <div class="container">
                <h2> veuillez renseignez votre Mot de passe : </h2>

                    <form method='POST' action='verification.php'>
                    <?php
                    session_start();
                    
                    $id=$_REQUEST['id'] ;

                    $_SESSION['id'] = $id;
                    var_dump($id);
                    var_dump($_SESSION['id'])
                    
                    ?>
                
                        <label>
                            <input type="password" name="mdp" placeholder="Renseignez votre Mot de passe" required>
                        </label>
            
                        <button> Valider </button> 

                    </form>
            </div>
        </main>
    </body>
</html>