<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

use PHPUnit\Framework\TestCase;

class BinaryTest extends TestCase
{
    public function test_Can_instantiate_from_decimal() : void
    {
        $binary = new Binary(1);
        $this->assertInstanceOf(Binary::class, $binary);
    }

    public function test_Can_instantiate_from_binary_string() : void
    {
        $binary = new Binary('10');
        $this->assertSame(2, $binary->decimal());
    }

    public function test_Get_as_decimal() : void
    {
        $binary = new Binary(1);
        $this->assertSame(1, $binary->decimal());

        $binary = new Binary(2);
        $this->assertSame(2, $binary->decimal());
    }

    public function test_Get_as_binary_string() : void
    {
        $binary = new Binary(1);
        $this->assertSame('1', $binary->string());

        $binary = new Binary(2);
        $this->assertSame('10', $binary->string());
    }

    public function test_Plus() : void
    {
        $binary = new Binary(1);
        $binary->plus(1);

        $this->assertSame(2, $binary->decimal());
    }
}
