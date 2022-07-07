<?php

class Balanced
{
    public function isBalanced(string $str): bool
    {
        $len = strlen($str);

        if ($str === '') {
            return true;
        }

        if ($str[0] === ')') {
            return false;
        }

        if ($str[$len - 1] === '(') {
            return false;
        }

        for ($i = 0; $i < $len; $i++) {
            if ($str[$i] !== '(' && $str[$i] !== ')') {
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
                return false;
            }
        }
        return $amount === 0;
    }
}
