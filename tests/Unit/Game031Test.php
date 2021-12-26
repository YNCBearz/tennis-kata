<?php

namespace Tests\Unit;

use App\TennisGame\Game031;
use PHPUnit\Framework\TestCase;

class Game031Test extends TestCase
{
    protected Game031 $sut;

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->sut = new Game031();
        $actual = $this->sut->score();
        $expected = 'Love-All';
        $this->assertEquals($expected, $actual);
    }
}