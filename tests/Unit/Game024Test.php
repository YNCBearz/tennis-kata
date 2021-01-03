<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game024;

class Game024Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game024();
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
