<?php

namespace TestsPhpCourse\Tasks;

use PHPUnit\Framework\TestCase;

class PowerOfThreeTest extends TestCase
{
    /**
     * @dataProvider isPowerOfThreeProvider
     */
    public function testIsPowerOfThree(int $number, bool $expected): void
    {
        $pt = new \PhpCourse\Tasks\PowerOfThree();

        self::assertEquals($expected, $pt->isPowerOfThree($number));
    }

    public function isPowerOfThreeProvider(): array
    {
        return [
            [3, true],
            [7, false],
            [27, true],
            [35, false],
        ];
    }
}
