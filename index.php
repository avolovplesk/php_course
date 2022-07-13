<?php

use PhpCourse\Tasks\Balanced;
use PhpCourse\Tasks\BinarySum;
use PhpCourse\Tasks\FibSeq;
use PhpCourse\Tasks\FizzBuzz;
use PhpCourse\Tasks\Happy;
use PhpCourse\Tasks\Perfect;
use PhpCourse\Tasks\PowerOfThree;
use PhpCourse\Tasks\SumDigits;

require  __DIR__ . '/vendor/autoload.php';

echo 'This is the first task - binary sum' . PHP_EOL;
echo (new BinarySum())->binSum('10101', '1010110101') . PHP_EOL;

echo 'This is the second task - power of three' . PHP_EOL;
var_dump((new PowerOfThree())->isPowerOfThree(9));

echo 'This is the third task - fibonacci sequence' . PHP_EOL;
echo (new FibSeq())->fib(54) . PHP_EOL;

echo 'This is the fourth task - add digits' . PHP_EOL;
echo (new SumDigits())->addDigits(64) . PHP_EOL;

echo 'This is the fifth task - balanced brackets' . PHP_EOL;
var_dump((new Balanced())->isBalanced('(()(())())'));

echo 'This is the sixth task - perfect number' . PHP_EOL;
var_dump((new Perfect())->isPerfect(496));

echo 'This is the seventh task - happy ticket' . PHP_EOL;
var_dump((new Happy())->isHappy(122221));

echo 'This is the eighth  task - fizz buzz' . PHP_EOL;
(new FizzBuzz())->fizBuz(15,25);