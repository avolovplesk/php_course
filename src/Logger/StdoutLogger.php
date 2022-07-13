<?php

namespace PhpCourse\Logger;

class StdoutLogger extends AbstractLogger
{
    public function log(string $message): void
    {
        echo $message, PHP_EOL;
    }
}
