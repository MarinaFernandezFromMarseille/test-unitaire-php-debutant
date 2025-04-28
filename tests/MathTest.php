<?php

namespace Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    private Math $math;

    protected function setUp(): void
    {
        $this->math = new Math();
    }

    public function testAddition(): void
    {
        $this->assertEquals(4, $this->math->addition(2, 2));
        $this->assertEquals(0, $this->math->addition(0, 0));
        $this->assertEquals(-2, $this->math->addition(-1, -1));
        $this->assertEquals(1, $this->math->addition(2, -1));
    }
}
