<?php

namespace TestsPhpCourse\Tasks;

use PhpCourse\Tasks\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider fizBuzProvider
     */
    public function testFizBuz(int $begin, int $end, string $expected): void
    {
        $fb = new FizzBuzz();

        $this->expectOutputString($expected);

        $fb->fizBuz($begin, $end);
    }

    public function fizBuzProvider(): array
    {
        return [
            [1, 5, '1 2 Fizz 4 Buzz '],
            [4, 11, '4 Buzz Fizz 7 8 Fizz Buzz 11 '],
            [25, 30, 'Buzz 26 Fizz 28 29 FizzBuzz '],
        ];
    }

    /**
     * @dataProvider fizBuzIncorrectProvider
     */
    public function testFizBuzIncorrect(int $begin, int $end): void
    {
        $fb = new FizzBuzz();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Incorrect interval');

        $fb->fizBuz($begin, $end);
    }

    public function fizBuzIncorrectProvider(): array
    {
        return [
            [5, 1],
            [7, 0],
        ];
    }
}
