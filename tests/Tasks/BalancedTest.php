<?php

namespace TestsPhpCourse\Tasks;

use PHPUnit\Framework\TestCase;

class BalancedTest extends TestCase
{
    /**
     * @dataProvider isBalancedProvider
     */
    public function testIsBalanced(string $str, bool $expected): void
    {
        $bl = new \PhpCourse\Tasks\Balanced();

        self::assertEquals($expected, $bl->isBalanced($str));
    }

    public function isBalancedProvider(): array
    {
        return [
            ['((()))', true],
            ['(()())', true],
            [')()())', false],
            ['()))()())', false],
        ];
    }
}
