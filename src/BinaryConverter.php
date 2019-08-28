<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

class BinaryConverter
{
    public function convert(int $number) : string
    {
        return decbin($number);
    }
}
