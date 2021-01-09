<?php

namespace PhpProjectLvl1\Games\Prime;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function play(): array
{
    $config = getConfig();
    $number = mt_rand($config['minNumber'], $config['maxNumber']);
    $numberIsPrime = isPrime($number);
    $correctAnswer = $numberIsPrime ? 'yes' : 'no';

    $result = [
        'question'      => $number,
        'correctAnswer' => $correctAnswer,
    ];
    return $result;
}

function isPrime(int $number): bool
{
    for ($i = 2, $halfNumber = intdiv($number, 2); $i < $halfNumber; ++$i) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function getConfig(): array
{
    return [
        'minNumber'     => 0,
        'maxNumber'     => 100,
    ];
}
