<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

use PHPUnit\Framework\TestCase;

class BinaryConverterTest extends TestCase
{
    public function test_Convert_to_binary() : void
    {
        $n = 1444;
        $expected = '10110100100';
        $conveter = new BinaryConverter();
        $test = $conveter->convert($n);
        $this->assertSame($expected, $test);
    }
}
