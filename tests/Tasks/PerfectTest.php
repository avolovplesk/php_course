<?php

namespace TestsPhpCourse\Tasks;

use PHPUnit\Framework\TestCase;

class PerfectTest extends TestCase
{
    /**
     * @dataProvider isPerfectProvider
     */
    public function testIsPerfect(int $num, bool $expected): void
    {
        $bs = new \PhpCourse\Tasks\Perfect();

        self::assertEquals($expected, $bs->isPerfect($num));
    }

    public function isPerfectProvider(): array
    {
        return [
            [6, true],
            [8, false],
            [15, false],
            [8128, true],
        ];
    }
}
