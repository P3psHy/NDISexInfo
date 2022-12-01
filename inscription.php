<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SexInfo | Inscption</title>
</head>
<body>
    <form method="POST" action="inscriptionValidate.php">

        <div>
            <label>Nom: </label>
            <input type="text" name="nom" id="nom">
        </div>
        
        <div>
            <label>Âge: </label>
            <input type="number" name="age" id="age">
        </div>
        
        <div>
            <label>Sexe: </label>
            <select>
                <option value="0">Homme</option>
                <option value="1">Femme</option>
            </select>
        </div>
        
        <div>
            <label>Mail: </label>
            <input type="text" name="nom" id="mail">
        </div>

        <div>
            <label>Confirmer votre mail: </label>
            <input type="text" name="nom" id="confirmMail">
        </div>

        <div>
            <label>Mot de passe: </label>
            <input type="password" name="nom" id="password">
        </div>

        <div>
            <label>Confirmer votre mot de passe: </label>
            <input type="password" name="password" id="confirmPassword">
        </div>

        <div>
            <button type="submit">S'inscrire</button>
            <button type="reset">Réinitialiser</button>
        </div>
    </form>
</body>
</html>