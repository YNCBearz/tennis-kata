<?php

namespace Tests\TennisGame;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game021;

class Game021Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game021();
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
