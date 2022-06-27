<?php

class Happy
{
    public function isHappy(string $ticket): bool
    {
        if (strlen($ticket) % 2 !== 0) {
            return false;
        }

        $sumFirst = 0;
        $sumSecond = 0;
        $len = strlen($ticket);

        for ($i = 0; $i < $len / 2; $i++) {
            $sumFirst += (int)$ticket[$i];
            $sumSecond += (int)$ticket[$len - 1 - $i];
        }

        return $sumFirst === $sumSecond;
    }
}
