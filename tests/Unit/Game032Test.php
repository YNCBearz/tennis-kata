<?php

namespace Tests\Unit;

use App\TennisGame\Game032;
use PHPUnit\Framework\TestCase;

class Game032Test extends TestCase
{
    /**
     * @test
     */
    public function testLoveAll()
    {
        $sut = new Game032();
        $actual = $sut->score();
        $this->assertEquals('love all', $actual);
    }

}