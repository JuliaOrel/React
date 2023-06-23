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
    $arr=[];
    $j=0;
    foreach($_POST as $value) {
        $array[$j] = $value;
        $j++;
    }
    if(count($_POST)<3){

        return $arr;
    }
     return $array;


}

function show(){
   echo "<h1>Answer all questions!!!!</h1>";
}