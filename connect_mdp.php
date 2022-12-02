<?php
include 'header.php';
?>
    <body>
        <?php include 'fond.php';?>
        <header>
        </header>

        <main>
            <div class="container">
                <div class="circle" id="change_color_zone"></div>

                
                    <div id="login">
                        <form method='POST' action='verification.php' class="form_login">
                        <?php
                        session_start();
                        
                        $id=$_REQUEST['id'] ;

                        $_SESSION['id'] = $id;
                        
                        ?>
                    
                        <p class="title_login" id="change_color">Veuillez renseignez votre mot de passe : </p>                                  
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
        </main>
    </body>
</html>