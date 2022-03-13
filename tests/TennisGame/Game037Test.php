<?php

namespace Tests\TennisGame;

use App\TennisGame\Game037;
use PHPUnit\Framework\TestCase;

class Game037Test extends TestCase
{

    /**
     * @test
     */
    public function testLoveAll()
    {
        $sut = new Game037();
        $actual = $sut->score();
        $this->assertEquals('Love All', $actual);
    }
}
