<?php

require '1_binarySum/BinarySum.php';
require '2_isPowerOfThree/PowerOfThree.php';
require '3_fib/FibSeq.php';
require '4_addDigits/SumDigits.php';
require '5_isBalanced/Balanced.php';
require '6_isPerfect/Perfect.php';
require '7_isHappy/Happy.php';
require '8_fizzBuzz/FizzBuzz.php';

echo 'This is the first task - binary sum' . PHP_EOL;
$task1 = new BinarySum();
echo $task1->binSum('10101', '1010110101') . PHP_EOL;

echo 'This is the second task - power of three' . PHP_EOL;
$task2 = new PowerOfThree();
var_dump($task2->isPowerOfThree(3));

echo 'This is the third task - fibonacci sequence' . PHP_EOL;
$task3 = new FibSeq();
echo $task3->fib(10) . PHP_EOL;

echo 'This is the fourth task - add digits' . PHP_EOL;
$task4 = new SumDigits();
echo $task4->addDigits(749) . PHP_EOL;

echo 'This is the fifth task - balanced brackets' . PHP_EOL;
$task5 = new Balanced();
var_dump($task5->isBalanced('(()(())())'));

echo 'This is the sixth task - perfect number' . PHP_EOL;
$task6 = new Perfect();
var_dump($task6->isPerfect(496));

echo 'This is the seventh task - happy ticket' . PHP_EOL;
$task7 = new Happy();
var_dump($task7->isHappy('122221'));

echo 'This is the eighth  task - fizz buzz' . PHP_EOL;
$task8 = new FizzBuzz();

$task8->fizBuz(5,27);
