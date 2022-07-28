<?php

namespace PhpCourse\Tasks;

class SumDigits
{
    public function addDigits(int $num): int
    {
        $digits = (string)$num;

        if (strlen($digits) === 1) {
            return $num;
        }

        while (strlen($digits) > 1) {
            $sum = 0;
            for ($i = 0, $len = strlen($digits); $i < $len; $i++) {
                $sum += (int)$digits[$i];
            }
            $digits = (string)$sum;
        }
        return $sum;
    }
}
