<?php
include 'header.php';
?>
    <body>
        <?php include 'fond.php';?>
        <header>
        </header>

        <main>
        <?php 
        session_start();
        

        if(!isset($_SESSION['erreurConnect']) || $_SESSION['erreurConnect'])
        {
            echo "<p> Login ou mot de passe incorect </p>" ;
        }
        
        
        ?>
        <div class="circle" id="change_color_zone"></div>
            <div class="container">
                
                <div id="login">
                    <form method='POST' action='connect_mdp.php' class="form_login">   
                    <p class="title_login" id="change_color"> Veuillez renseigner votre identifiant : </p>                                  
                        <!-- Register buttons -->
                        <div class="text-center">
                        <label>
                            <input type="email" name="id" placeholder="Votre adresse email ..." required>
                        </label>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary btn-block mb-4">Valider</button>
                        <button type="reset" class="btn btn-primary btn-block mb-4">Annuler</button>
                            <p>Vous n'êtes pas membre ? <a href="inscription.php" id="change_color">Inscrivez-vous</a></p>
                            <button type="button" class="btn btn-link btn-floating mx-1"></button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>