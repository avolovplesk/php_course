<?php

class SumDigits
{
    public function addDigits(int $num): int
    {
        $digits = (string)$num;

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
