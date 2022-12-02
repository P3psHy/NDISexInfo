<?php
    require "sqlconnect.php";

    //recupération des questions
    $sql_quiz_question=$connection->query('SELECT `question` FROM `question`,`quizz` 
    WHERE quizz.id = question.id_quizz AND question.id_quizz='.$_REQUEST['id'].';') ;

    $ligne_question = $sql_quiz_question->fetchall();

    $i=1 ;
    foreach($ligne_question as $value_question){
        
        echo "Question N° :".$i." ".$value_question['question'] ;
        echo "<br>";
        echo "<br>";
        
            
        //recuperation des reponses
        $sql_quiz_reponses=$connection->query('SELECT `reponses` FROM `reponses`,`quizz`,`question` 
        WHERE quizz.id = reponses.id_quizz AND question.id=reponses.id_question AND quizz.id='.$_REQUEST['id'].' 
        AND reponses.id_question='.$i.';') ;

        $ligne_reponse = $sql_quiz_reponses->fetchall();

            
        $i2=1;
        foreach($ligne_reponse as $value_reponses){
            
            echo "Reponse N° :".$i2." ".$value_reponses['reponses'];
            echo "<br>";
            echo "<br>";
            $i2++;

        }
        $i++;
    }


?>