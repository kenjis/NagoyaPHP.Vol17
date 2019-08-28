<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

class TripleNumber
{
    public function isTripleNumber(string $binary) : bool
    {
        if (strpos($binary, '000') !== false) {
            return true;
        }

        if (strpos($binary, '111') !== false) {
            return true;
        }

        return false;
    }

    public function getNextNonTripleNumber(string $binary) : string
    {
        if (! $this->isTripleNumber($binary)) {
            $decimal = bindec($binary);
            $binary = decbin(++$decimal);
        }

        $binary = '0' . $binary;

        while ($this->isTripleNumber($binary)) {
            if (strpos($binary, '000') !== false) {
                preg_match('/(.*?)(000)(.*)/', $binary, $matches);

                $before = $matches[1];
                $after = $matches[3];

                $after = substr(
                    str_repeat('001', (int) ceil(strlen($after) / 3)),
                    0,
                    strlen($after)
                );
                $binary = $before . '001' . $after;
            }

            if (strpos($binary, '111') !== false) {
                preg_match('/(.*?)(0111)(.*)/', $binary, $matches);

                $before = $matches[1];
                $after = $matches[3];

                $after = substr(
                    str_repeat('001', (int) ceil(strlen($after) / 3)),
                    0,
                    strlen($after)
                );
                $binary = $before . '1001' . $after;
            }
        }

        return ltrim($binary, '0');
    }
}
