<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

class TripleNumber
{
    public function isTripleNumber(string $binary_string) : bool
    {
        if (strpos($binary_string, '000') !== false) {
            return true;
        }

        if (strpos($binary_string, '111') !== false) {
            return true;
        }

        return false;
    }

    public function getNextNonTripleNumber(Binary $binary) : string
    {
        if (! $this->isTripleNumber($binary->string())) {
            $binary->plus(1);
        }

        $binary_string = '0' . $binary->string();

        while ($this->isTripleNumber($binary_string)) {
            if (strpos($binary_string, '000') !== false) {
                preg_match('/(.*?)(000)(.*)/', $binary_string, $matches);

                $before = $matches[1];
                $after = $matches[3];

                $after = substr(
                    str_repeat('001', (int) ceil(strlen($after) / 3)),
                    0,
                    strlen($after)
                );
                $binary_string = $before . '001' . $after;
            }

            if (strpos($binary_string, '111') !== false) {
                preg_match('/(.*?)(0111)(.*)/', $binary_string, $matches);

                $before = $matches[1];
                $after = $matches[3];

                $after = substr(
                    str_repeat('001', (int) ceil(strlen($after) / 3)),
                    0,
                    strlen($after)
                );
                $binary_string = $before . '1001' . $after;
            }
        }

        return ltrim($binary_string, '0');
    }
}
