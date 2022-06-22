<?php

// Реализуйте функцию isPowerOfThree() которая определяет, является ли переданное число натуральной степенью тройки.
// Например, число 27 – это третья степень (33), а 81 – четвёртая (34).

function isPowerOfThree(int $number): bool
{
    $exp = log($number, 3);

    return ctype_digit((string)$exp);
}

var_dump(isPowerOfThree(3));
