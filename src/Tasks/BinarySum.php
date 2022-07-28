<?php

namespace PhpCourse\Tasks;

use PhpCourse\Logger\LoggerInterface;

class BinarySum
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function binSum(string $one, string $two): string
    {
        if ($one === '' || $two === '') {
            $this->logger->err('Empty first or second variable');
            throw new \InvalidArgumentException('Empty first or second variable');
        }
        $this->logger->info('The sum is:');
        return decbin(bindec($one) + bindec($two));
    }
}
