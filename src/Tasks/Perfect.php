<?php

namespace PhpCourse\Tasks;

class Perfect
{
    public function isPerfect(int $num): bool
    {
        $sum = 1;
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i === 0) {
                $sum += $i;
            }
        }

        return $sum === $num;
    }
}
