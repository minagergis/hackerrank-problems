<?php

namespace HackerRank\Tests;

use HackerRank\CutTheStick;
use PHPUnit\Framework\TestCase;

class CutTheSticksTest extends TestCase
{
    public function testPageCount()
    {
        $cutStick = new CutTheStick();

        $sticks = [5, 4, 4, 2, 2, 8];

        $this->assertEquals([6,4,2,1], $cutStick->cutTheSticks($sticks));
    }
}
