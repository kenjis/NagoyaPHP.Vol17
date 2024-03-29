<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

use PHPUnit\Framework\TestCase;

class TripleNumberTest extends TestCase
{
    /**
     * @dataProvider dataProviderBinary
     */
    public function test_Get_next_non_triple_number($number, $expected) : void
    {
        $tripleNumber = new TripleNumber();
        $binary = new Binary($number);
        $test = $tripleNumber->getNextNonTripleNumber($binary);
        $this->assertSame($expected, $test->string());
    }

    public function dataProviderBinary()
    {
        return [
            [
                '1010101010101010',
                '1010101010101011',
            ],
            [
                '111',
                '1001',
            ],
            [
                '1101',
                '10010',
            ],
            [
                '10110100001',
                '10110100100',
            ],
            [
                '110011001111111111',
                '110011010010010010',
            ],
            [
                '100000000000000000000000000000',
                '100100100100100100100100100100',
            ],
            [
                '1111111111111111111111111111',
                '10010010010010010010010010010',
            ],

        ];
    }
}
