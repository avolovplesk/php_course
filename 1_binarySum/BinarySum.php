<?php

class BinarySum
{
    public function binSum(string $one, string $two): string
    {
        return decbin(bindec($one) + bindec($two));
    }
}
