<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

class Dokaku17
{
    public function run(string $input) : string
    {
        $tripleNumber = new TripleNumber();
        $binary = new Binary((int) $input);

        $nextNonTripleNumber = $tripleNumber->getNextNonTripleNumber($binary);
        return (string) (new Binary($nextNonTripleNumber))->decimal();
    }
}
