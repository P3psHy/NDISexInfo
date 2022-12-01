<?php
session_start();
require "sqlconnect.php" ;
$mdp = SHA1($_REQUEST['mdp']);

$sql=$connection ->prepare('SELECT * FROM compte WHERE email_parent= :monEmail AND mdp= :monMdp') ;
$sql->bindParam(':monEmail', $_SESSION["id"]) ;
$sql->bindParam(':monMdp', $mdp) ;

$sql->execute();


$ligne = $sql->fetchall();

if(!empty($ligne))
{
    if ($_SESSION['id']==$ligne[0]['email_parent'] && $mdp==$ligne[0]['mdp'] ) {  

        $_SESSION['id'] = $id;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['erreurConnect']=false;
        header("Location: acceuil.php");
       
}
}else{

    $_SESSION['erreurConnect']=true;
    header("Location: connect_id.php");
    
    }
     

?>


