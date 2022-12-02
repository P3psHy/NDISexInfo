<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sexinfo | Quiz</title>
</head>
<body>


    <?php 
    require "sqlconnect.php" ;
    $sql=$connection->query("SELECT * FROM `quizz`") ;
    
    $ligne = $sql->fetchall();

    foreach($ligne as $value){
        echo "<a href=\"quiz_choisis.php?id=".$value['id']."\">".$value["nom_quizz"]."</a>" ;
        echo "<br>";
    }
    ?>

    
</body>
</html>

