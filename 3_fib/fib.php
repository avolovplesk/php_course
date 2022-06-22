<?php

// Реализуйте функцию fib(), находящую положительные числа Фибоначчи.
// Аргументом функции является порядковый номер числа.

function fib(int $num): int
{
    if ($num === 0) {
        return 0;
    }
    if ($num === 1) {
        return 1;
    }

    $seq = [0, 1];
    for ($i = 2; $i <= $num; $i++) {
            $seq[] = $seq[$i - 1] + $seq[$i - 2];
    }

    return $seq[$num];
}

echo fib(10) . PHP_EOL;
