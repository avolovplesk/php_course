<?php

namespace TestsPhpCourse\Tasks;

use PhpCourse\Tasks\Balanced;
use PHPUnit\Framework\TestCase;
use PhpCourse\Logger\StdoutLogger;

class BalancedTest extends TestCase
{
    /**
     * @dataProvider isBalancedProvider
     */
    public function testIsBalanced(string $str, bool $expected, string $method, string $message): void
    {
        $logger = $this->createMock(StdoutLogger::class);
        $logger->expects($this->once())->method($method)->with($this->identicalTo($message));
        $bl = new Balanced($logger);

        self::assertEquals($expected, $bl->isBalanced($str));
    }

    public function isBalancedProvider(): array
    {
        return [
            ['((()))', true, 'info', 'String is balanced'],
            ['(()())', true, 'info', 'String is balanced'],
            ['(()()))))())', false, 'warn', 'String is not balanced'],
            ['[()))()())', false, 'err', 'String contains incorrect bracket'],
        ];
    }
}
