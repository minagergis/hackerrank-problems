<?php

namespace HackerRank\Tests;

use HackerRank\Sock;
use PHPUnit\Framework\TestCase;

class PageCountTest extends TestCase
{
    public function testPageCount()
    {
        $sock = new Sock();

        $socksArray = [10, 20, 20, 10, 10, 30, 50, 10, 20];
        $socksCount = count($socksArray);

        $this->assertEquals(3, $sock->sockMerchant($socksCount, $socksArray));
    }
}
