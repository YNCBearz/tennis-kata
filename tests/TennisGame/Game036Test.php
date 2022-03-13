<?php

namespace Tests\TennisGame;

use App\TennisGame\Game036;
use PHPUnit\Framework\TestCase;

class Game036Test extends TestCase
{

    /**
     * @test
     */
    public function testLoveAll()
    {
        $sut = new Game036();
        $actual = $sut->score();
        $this->assertEquals('Love All', $actual);
    }
}
