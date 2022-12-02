<?php
    require "sqlconnect.php";

    //recupération des questions
    $sql_quiz_question=$connection->query('SELECT `question` FROM `question`,`quizz` 
    WHERE quizz.id = question.id_quizz AND question.id_quizz='.$_REQUEST['id'].';') ;

    $ligne_question = $sql_quiz_question->fetchall();

    //recuperation des reponses
    $sql_quiz_reponses=$connection->query('SELECT `reponses` FROM `reponses`,`quizz`,`question` 
    WHERE quizz.id = reponses.id_quizz AND question.id=reponses.id_question AND quizz.id='.$_REQUEST['id'].' 
    AND reponses.id_question=;') ;

    $ligne_reponse = $sql_quiz_reponses->fetchall();

    foreach($ligne_question as $value_question){
        echo $value_question['question'] ;
        echo "<br>";
        foreach($ligne_reponse as $value_reponses){
            echo $ligne_reponse['reponses'] ;
            echo "<br>";
        }
    }

   


    foreach($ligne_reponse as $value){
        echo $value['reponses'] ;
        echo "<br>";
    }


?>