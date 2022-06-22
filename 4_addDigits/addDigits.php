<?php

// Реализуйте функцию addDigits(), которая принимает на вход неотрицательное целое число и возвращает другое число, полученное из первого следующим преобразованием:
// Итеративно сложите все входящие в него цифры до тех пор пока, не останется одна цифра.

function addDigits(int $num): int
{
    $digits = (string)$num;

    while (strlen($digits) > 1) {
        $sum = 0;
        for ($i = 0; $i < strlen($digits); $i++) {
            $sum += (int)$digits[$i];
        }
        $digits = (string)$sum;
    }
    return $sum;
}

echo addDigits(749) . PHP_EOL;
