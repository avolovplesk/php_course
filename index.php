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

$logger = new \PhpCourse\Logger\StdoutLogger();
$filelogger = new \PhpCourse\Logger\FileLogger(__DIR__ . '/log.txt');

echo '1. This is the first task - binary sum' . PHP_EOL;
try {
    echo (new BinarySum($logger))->binSum('10101', '101') . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

echo '2. This is the second task - power of three' . PHP_EOL;
var_dump((new PowerOfThree())->isPowerOfThree(9));

echo '3. This is the third task - fibonacci sequence' . PHP_EOL;
echo (new FibSeq())->fib(54) . PHP_EOL;

echo '4. This is the fourth task - add digits' . PHP_EOL;
echo (new SumDigits())->addDigits(64) . PHP_EOL;

echo '5. This is the fifth task - balanced brackets' . PHP_EOL;
var_dump((new Balanced($logger))->isBalanced('(()()))))())'));

echo '6. This is the sixth task - perfect number' . PHP_EOL;
var_dump((new Perfect())->isPerfect(496));

echo '7. This is the seventh task - happy ticket' . PHP_EOL;
var_dump((new Happy())->isHappy(122221));

echo '8. This is the eighth  task - fizz buzz' . PHP_EOL;
try {
    (new FizzBuzz())->fizBuz(15,25);
} catch (InvalidArgumentException $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
