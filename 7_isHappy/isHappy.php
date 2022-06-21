<?php

// Реализуйте функцию isHappy, проверяющую является ли номер счастливым (номер — всегда строка).
// Функция должна возвращать true, если билет счастливый, или false, если нет.
// "Счастливым" называют билет с номером, в котором сумма первой половины цифр равна сумме второй половины цифр.
// Номера могут быть произвольной длины, с единственным условием, что количество цифр всегда чётно, например: 33 или 2341 и так далее.

function isHappy(string $ticket): bool
{
    if (strlen($ticket) % 2 !== 0) {
        return false;
    }

    $sumFirst = 0;
    $sumSecond = 0;
    $len = strlen($ticket);

    for ($i = 0; $i < $len / 2; $i++) {
        $sumFirst += (int)$ticket[$i];
        $sumSecond += (int)$ticket[$len - 1 - $i];
    }

    return $sumFirst === $sumSecond;
}

var_dump(isHappy('122221'));
