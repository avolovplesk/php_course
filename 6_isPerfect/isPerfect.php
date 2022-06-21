<?php

// Создайте функцию isPerfect, которая принимает число и возвращает true, если оно совершенное, и false — в ином случае.

function isPerfect(int $num): bool
{
    $sum = 1;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $sum += $i;
        }
    }

    return $sum === $num;
}

var_dump(isPerfect(496));
