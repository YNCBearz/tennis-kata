<?php

namespace Tests\Unit;

use App\TennisGame\Game014;
use PHPUnit\Framework\TestCase;

class Game014Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game014();
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }

    public function testFifteenLove()
    {
        $this->game->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function testThirtyLove()
    {
        $this->game->firstPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    public function testFortyLove()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->scoreShouldBe('Forty-Love');
    }

    public function testLoveFifteen()
    {
        $this->game->secondPlayerWinPoint();
        $this->scoreShouldBe('Love-Fifteen');
    }
    public function testLoveThirty()
    {
        $this->game->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Love-Thirty');
    }
}
