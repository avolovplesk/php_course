<?php

namespace PhpCourse\Tasks;

class FibSeq
{
    public function fib(int $num): int
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
}
