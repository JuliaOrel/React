<?php
function calculateCorrectAnswers($usersAnswers, $correctAnswers): void
{
    $correctAnsw=0;
    $_SESSION['score']=0;
    for($i=0; $i<count($usersAnswers); $i++){
        if($usersAnswers[$i]==$correctAnswers[$i]){
            $correctAnsw++;
        }

    }
    $_SESSION['score']=1*(intval($correctAnsw));
    echo $correctAnsw . $_SESSION['score'];
}

