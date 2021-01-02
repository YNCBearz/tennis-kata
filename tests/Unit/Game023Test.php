<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game023;

class Game023Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game023();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    public function testFifteenLove()
    {
        $expected = 'Fifteen-Love';
        $this->sut->firstPlayerWinPoint();
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }
}
