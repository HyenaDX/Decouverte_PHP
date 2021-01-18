<?php
    if(isset($_POST['answerInput'])){
    $answerInput = $_POST['answerInput'];
    }
    if(isset($_POST['operation'])){
    $operation = $_POST['operation'];
    }
    if(isset($_POST['answerInputTwo'])){
    $answerInputTwo = $_POST['answerInputTwo'];
    }

            if($operation == 'addition')
            {
            $resultat = $answerInput + $answerInputTwo;
            echo $resultat;
            }
             
            if($operation == 'soustraction') 
            {
            $resultat = $answerInput - $answerInputTwo;
            echo $resultat;
            }
             
            if($operation == 'multiplication')
            {  
            $resultat = $answerInput * $answerInputTwo;
            echo $resultat;
            }
         
            if($operation == 'division')
            {
            $resultat = $answerInput / $answerInputTwo;
            echo $resultat;
            }
?>

    <a href="test.php" class="btn btn-outline-danger">Retour</a>
