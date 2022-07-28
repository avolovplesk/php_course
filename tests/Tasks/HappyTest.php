<?php

namespace TestsPhpCourse\Tasks;

use PHPUnit\Framework\TestCase;

class HappyTest extends TestCase
{
    /**
     * @dataProvider isHappyProvider
     */
    public function testIsHappy(string $ticket, bool $expected): void
    {
        $hp = new \PhpCourse\Tasks\Happy();

        self::assertEquals($expected, $hp->isHappy($ticket));
    }

    public function isHappyProvider(): array
    {
        return [
            ['456654', true],
            ['463', false],
            ['1234', false],
            ['124340', true],
            ['0', false],
        ];
    }
}
