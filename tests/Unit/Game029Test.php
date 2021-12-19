<?php

namespace Tests\Unit;

use App\TennisGame\Game029;
use PHPUnit\Framework\TestCase;

class Game029Test extends TestCase
{
    protected Game029 $sut;

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->sut = new Game029();
        $actual = $this->sut->score();
        $expected = 'Love-All';
        $this->assertEquals($expected, $actual);
    }

}