<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

class Dokaku17
{
    public function run(string $input) : string
    {
        $converter = new BinaryConverter();
        $tripleNumber = new TripleNumber();

        $binary = $converter->convert((int) $input);

        return (string) bindec($tripleNumber->getNextNonTripleNumber($binary));
    }
}
