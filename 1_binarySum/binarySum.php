<?php

// Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму.
// Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.

function binarySum(string $one, string $two): string
{
    return decbin(bindec($one) + bindec($two));
}

echo binarySum('1011','11111') . PHP_EOL;
