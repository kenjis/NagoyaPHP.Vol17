<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

class TripleNumber
{
    public function getNextNonTripleNumber(Binary $binary) : Binary
    {
        if (! $binary->isTripleNumber()) {
            $binary->plus(1);
        }

        while ($binary->isTripleNumber()) {
            $binary_string = '0' . $binary->string();

            preg_match('/(.*?)(1000|0111)(.*)/', $binary_string, $matches);

            $before = $matches[1];
            $after = $matches[3];

            $after = substr(
                str_repeat('001', (int) ceil(strlen($after) / 3)),
                0,
                strlen($after)
            );
            $binary_string = $before . '1001' . $after;
            $binary = new Binary($binary_string);
        }

        return $binary;
    }
}
