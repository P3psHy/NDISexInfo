<?php
include 'header.php';
?>
<body>
    <div class="container">
        <div class="circle" id="change_color_zone"></div>
    
            <div id="login">
                <form method="POST" action="inscriptionValidate.php" class="form_login">
                        <p class="title_login" id="change_color">Veuillez vous inscrire :</p>                                  
                        <!-- Register buttons -->
                        <div class="text-center">
                            <div>
                                <label>Prénom : </label>
                                <br>
                                <input type="text" name="prenom" id="Prenom" placeholder="Votre prénom ..." onfocusout="verifPrenom()">
                                <div id ="erreurPrenom"></div>
                            </div>
                            <br>
                            <div>
                                <label>Âge : </label>
                                <br>
                                <input type="number" name="age" id="Poids" placeholder="Votre âge ..." onfocusout="verifPoids()">
                                <div id ="erreurPoids"></div>
                            </div>
                            <br>
                            <div>
                                <label>Sexe : </label>
                                <br>
                                <select name="sexe">
                                    <option value="0">Garçon</option>
                                    <option value="1">Fille</option>
                                </select>
                            </div>
                            <br>
                            <div>
                                <label>Mail : </label>
                                <br>
                                <input type="text" name="mail" id="Mail" placeholder="Votre mail ..." onfocusout="verifMail()">
                                <div id ="erreurMail"></div>
                            </div>
                            <br>
                            <div>
                                <label>Confirmer votre mail : </label>
                                <br>    
                                <input type="text" name="confirmMail" id="CfMail" placeholder="Votre mail ..." onfocusout="verifCfMail()">
                                <div id ="erreurCfMail"></div>
                            </div>
                            <br>
                            <div>
                                <label>Mot de passe : </label>
                                <br>
                                <input type="password" name="password" id="password" placeholder="Votre mot de passe ..." minlength="6">
                            </div>
                            <br>
                            <div>
                                <label>Confirmer votre mot de passe : </label>
                                <br>
                                <input type="password" name="confirmPassword" id="CfPassword" placeholder="Votre mot de passe ..." onfocusout="verifCfMdp()">
                                <div id ="erreurCfPassword"></div>
                            </div>
                            <br>
                            <div>
                            <button type="submit" class="btn btn-primary btn-block mb-4">S'inscrire</button>
                            <button type="reset" class="btn btn-primary btn-block mb-4">Annuler</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
include 'footer.php';
?>