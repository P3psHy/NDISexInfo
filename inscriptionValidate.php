<?php

try{

    require "sqlconnect.php" ;
    $prenom=$_REQUEST['prenom'] ;
    $age=$_REQUEST['age'] ;
    $sexe=$_REQUEST['sexe'] ;
    $mail=$_REQUEST['mail'] ;
    $mdp=SHA1($_REQUEST['password']) ;
    
    $typeS = true;
    if($sexe == 0){
        $typeS=false;
    }

    $sql= $connection->prepare("INSERT INTO compte (prenom,age,sexe,email_parent,mdp) VALUES 
    (:prenom, :age, :sexe, :email, :mdp)") ;

    $sql->bindParam(':prenom',$prenom,PDO::PARAM_STR);
    $sql->bindParam(':age', $age, PDO::PARAM_INT);
    $sql->bindParam(':sexe', $typeS, PDO::PARAM_BOOL);
    $sql->bindParam(':email', $mail, PDO::PARAM_STR);
    $sql->bindParam(':mdp', $mdp, PDO::PARAM_STR);
  


    $sql->execute();

    echo "Vos informations ont bien été ajoutées à notre base de données ! Vous êtes maintenant inscris !";

    //header("location: accueil.php");

}catch (PDOException $e){
    echo "Erreur: ".$e->getMessage();
    echo"<a href =\"accueil.php\">Retour à l'accueil</a>";
}


?>
