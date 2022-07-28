<?php

namespace PhpCourse\Tasks;

use PhpCourse\Logger\LoggerInterface;

class Balanced
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function isBalanced(string $str): bool
    {
        $len = strlen($str);

        if ($str === '') {
            $this->logger->info('Empty string');
            return true;
        }

        if ($str[0] === ')') {
            $this->logger->err('String starts with wrong bracket');
            return false;
        }

        if ($str[$len - 1] === '(') {
            $this->logger->err('String ends with wrong bracket');
            return false;
        }

        for ($i = 0; $i < $len; $i++) {
            if ($str[$i] !== '(' && $str[$i] !== ')') {
                $this->logger->err('String contains incorrect bracket');
                return false;
            }
        }

        $amount = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($str[$i] === '(') {
                $amount++;
            } else {
                $amount--;
            }
            if ($amount < 0) {
                $this->logger->warn('String is not balanced');
                return false;
            }
        }
        $this->logger->info('String is balanced');
        return $amount === 0;
    }
}
