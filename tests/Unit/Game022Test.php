<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game022;

class Game022Test extends TestCase
{
    protected function setUp(): void
    {
        $this->sut = new Game022();
    }

    public function testThirtyLove()
    {
        $this->sut->firstPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }
}
