<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>SexInfo | Connexion</title>

</head>
    <body>
        <header>
        </header>

        <main>
            <div class="container">
                <div class="circle" id="change_color_zone"></div>
                <div class="container">
                
                    <div id="login">
                        <form method='POST' action='verification.php' class="form_login">
                        <?php
                        session_start();
                        
                        $id=$_REQUEST['id'] ;

                        $_SESSION['id'] = $id;
                        
                        ?>
                    
                    <p class="title_login" id="change_color">Veuillez renseignez votre Mot de passe : </p>                                  
                        <!-- Register buttons -->
                        <div class="text-center">
                        <label>
                            <input type="password" name="mdp" placeholder="Votre mot de passe ..." required>
                        </label>
                        <br>
                        <br>
                        </form>
                        <button type="button" class="btn btn-primary btn-block mb-4">Valider</button>
                        <button type="reset" class="btn btn-primary btn-block mb-4">Annuler</button>
                            <p>Vous n'êtes pas membre ? <a href="inscription.php" id="change_color">Inscrivez-vous</a></p>
                            <button type="button" class="btn btn-link btn-floating mx-1"></button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>