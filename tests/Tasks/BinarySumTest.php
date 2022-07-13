<?php

namespace TestsPhpCourse\Tasks;

use PhpCourse\Logger\StdoutLogger;
use PhpCourse\Tasks\BinarySum;
use PHPUnit\Framework\TestCase;

class BinarySumTest extends TestCase
{
    /**
     * @dataProvider binSumEmptyProvider
     */
    public function testBinSumEmpty(string $a, string $b): void
    {
        $logger = $this->createMock(StdoutLogger::class);
        $logger->expects($this->once())->method('err')->with($this->identicalTo('Empty first or second variable'));

        $bs = new BinarySum($logger);

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
        $logger = $this->createMock(StdoutLogger::class);
        $logger->expects($this->once())->method('info')->with($this->identicalTo('The sum is:'));

        $bs = new BinarySum($logger);

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
