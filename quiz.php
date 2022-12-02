<?php
include 'header.php';
?>
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
<?php

include 'footer.php';

?>

