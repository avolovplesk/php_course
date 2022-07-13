<?php

namespace PhpCourse\Tasks;

class BinarySum
{
    public function binSum(string $one, string $two): string
    {
        if ($one === '' || $two === '') {
            throw new \InvalidArgumentException('Empty first or second variable');
        }
        return decbin(bindec($one) + bindec($two));
    }
}
