<?php

namespace TestsPhpCourse\Tasks;

use PHPUnit\Framework\TestCase;

class BinarySumTest extends TestCase
{
    /**
     * @dataProvider binSumEmptyProvider
     */
    public function testBinSumEmpty(string $a, string $b): void
    {
        $bs = new \PhpCourse\Tasks\BinarySum();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Empty first or second variable');

        $bs->binSum($a, $b);
    }

    public function binSumEmptyProvider(): array
    {
        return [
            ['', '001'],
            ['100', ''],
            ['',''],
        ];
    }

    /**
     * @dataProvider binSumProvider
     */
    public function testBinSum(string $a, string $b, string $expected): void
    {
        $bs = new \PhpCourse\Tasks\BinarySum();

        self::assertEquals($expected, $bs->binSum($a, $b));
    }

    public function binSumProvider(): array
    {
        return [
            ['101', '001', '110'],
            ['100', '001', '101'],
            ['1','0','1'],
        ];
    }
}
