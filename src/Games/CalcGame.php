<?php

namespace Php\Project\Lvl1\Games;

function playCalcGame($gameConfig)
{
    $firstNumber = mt_rand($gameConfig['firstMinNumber'], $gameConfig['firstMaxNumber']);
    $secondNumber = mt_rand($gameConfig['secondMinNumber'], $gameConfig['secondMaxNumber']);
    $operators = ["*", "+", "-"];
    $operatorIndex = mt_rand(0, count($operators) - 1);
    $expression = "{$firstNumber} {$operators[$operatorIndex]} {$secondNumber}";
    $correctAnswer = (string) eval("return {$expression};");

    $result = [
    'question'      => $expression,
    'correctAnswer' => $correctAnswer];
    return $result;
}
