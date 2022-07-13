<?php

namespace TestsPhpCourse\Tasks;

use PhpCourse\Tasks\SumDigits;
use PHPUnit\Framework\TestCase;

class SumDigitsTest extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
     */
    public function testAddDigits(int $num, int $expected): void
    {
        $ad = new \PhpCourse\Tasks\SumDigits();

        self::assertEquals($expected, $ad->addDigits($num));
    }

    public function addDigitsProvider(): array
    {
        return [
            [51, 6],
            [345, 3],
            [8128, 1],
            [7, 7],
        ];
    }
}
