<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku17;

use Nagoyaphp\Dokaku17\Exception\LogicException;

class Binary
{
    private $decimal;

    /**
     * Binary constructor.
     *
     * @param $number int or binary as string
     */
    public function __construct($number)
    {
        if (is_int($number)) {
            $this->decimal = $number;
            return;
        }

        if (is_string($number)) {
            $this->decimal = (int) bindec($number);
            return;
        }

        throw new LogicException('Unsupported arg: ' . gettype($number));
    }

    public function decimal() : int
    {
        return $this->decimal;
    }

    public function string() : string
    {
        return decbin($this->decimal);
    }

    public function plus(int $int) : void
    {
        $this->decimal = $this->decimal + $int;
    }
}
