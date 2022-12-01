<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>SexInfo | Inscption</title>
</head>
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
                                <input type="text" name="prenom" id="prenom" placeholder="Votre prénom ...">
                            </div>
                            <br>
                            <div>
                                <label>Âge : </label>
                                <br>
                                <input type="number" name="age" id="age" placeholder="Votre âge ...">
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
                                <input type="text" name="mail" id="mail" placeholder="Votre mail ...">
                            </div>
                            <br>
                            <div>
                                <label>Confirmer votre mail : </label>
                                <br>    
                                <input type="text" name="confirmMail" id="confirmMail" placeholder="Votre mail ...">
                            </div>
                            <br>
                            <div>
                                <label>Mot de passe : </label>
                                <br>
                                <input type="password" name="password" id="password" placeholder="Votre mot de passe ...">
                            </div>
                            <br>
                            <div>
                                <label>Confirmer votre mot de passe : </label>
                                <br>
                                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Votre mot de passe ...">
                            </div>
                            <br>
                            <div>
                            <button type="button" class="btn btn-primary btn-block mb-4">S'inscrire</button>
                            <button type="reset" class="btn btn-primary btn-block mb-4">Annuler</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>