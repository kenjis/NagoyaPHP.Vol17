<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

use PHPUnit\Framework\TestCase;

class Dokaku17Test extends TestCase
{
    /**
     * @var Dokaku17
     */
    protected $dokaku17;

    protected function setUp() : void
    {
        $this->dokaku17 = new Dokaku17;
    }

    public function testIsInstanceOfDokaku17() : void
    {
        $actual = $this->dokaku17;
        $this->assertInstanceOf(Dokaku17::class, $actual);
    }
}
