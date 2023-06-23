<?php

function calculateCorrectAnswers($usersAnswers, $correctAnswers, $koef): float|int
{
    $correctAnsw=0;

    for($i=0; $i<count($usersAnswers); $i++){
        if($usersAnswers[$i]==$correctAnswers[$i]){
            $correctAnsw+=$koef;
        }

    }

    $score=1*(intval($correctAnsw));

    return $score;
}

function pullUserAnswers(): array
{
    $array=[];
    $j=0;
    foreach($_POST as $value) {
        $array[$j] = $value;
        $j++;
    }
    return $array;
}