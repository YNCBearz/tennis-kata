<?php

namespace Tests\Unit;

use App\TennisGame\Game034;
use PHPUnit\Framework\TestCase;

class Game034Test extends TestCase
{
    /**
     * @test
     */
    public function testLoveAll()
    {
        $sut = new Game034();
        $actual = $sut->score();
        $expected = 'Love All';
        $this->assertEquals($expected, $actual);
    }

}