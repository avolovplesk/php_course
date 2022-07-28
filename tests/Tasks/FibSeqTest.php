<?php

namespace TestsPhpCourse\Tasks;

use PHPUnit\Framework\TestCase;

class FibSeqTest extends TestCase
{
    /**
     * @dataProvider fibProvider
     */
    public function testFib(int $num, int $expected): void
    {
        $fb = new \PhpCourse\Tasks\FibSeq();

        self::assertEquals($expected, $fb->fib($num));
    }

    public function fibProvider(): array
    {
        return [
            [10, 55],
            [24, 46368],
            [5, 5],
        ];
    }
}
