<?php

namespace Tests\Feature;

use Psr\Log\InvalidArgumentException;
use Tests\TestCase;

class ExceptionTest extends TestCase
{
    public function divide($a, $b)
    {
        if($b == 0)
        {
            throw new \InvalidArgumentException('can not divide for zero', 1);
        }
        return $a / $b;
    }

    /**
     * A basic test example.
     *
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgument()
    {
        $this->divide(4, 0);
    }
}
