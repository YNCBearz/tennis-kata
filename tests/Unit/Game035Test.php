<?php

namespace Tests\Unit;

use App\TennisGame\Game035;
use PHPUnit\Framework\TestCase;

class Game035Test extends TestCase
{

    /**
     * @test
     */
    public function testLoveAll()
    {
        $sut = new Game035();
        $actual = $sut->score();
        $this->assertEquals('Love All', $actual);
    }
}
