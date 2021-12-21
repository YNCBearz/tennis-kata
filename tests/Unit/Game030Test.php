<?php

namespace Tests\Unit;

use App\TennisGame\Game030;
use PHPUnit\Framework\TestCase;

class Game030Test extends TestCase
{
    /**
     * @test
     */
    public function testLoveAll()
    {
        $sut = new Game030();
        $expected = 'Love-All';
        $actual = $sut->score();
        $this->assertEquals($expected, $actual);
    }

}