<?php

namespace PhpCourse\Tasks;

class PowerOfThree
{
    public function isPowerOfThree(int $number): bool
    {
        $exp = log($number, 3);

        return ctype_digit((string)$exp);
    }
}
