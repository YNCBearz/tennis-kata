<?php

namespace Tests\Unit;

use App\TennisGame\Game017;
use PHPUnit\Framework\TestCase;

class Game017Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game017();
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    public function testFifteenLove()
    {
        $this->game->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function testDeuce()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Deuce');
    }

    public function testFirstPlayerAdv()
    {
        $this->game->firstPlayerWinPoint(4);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('FirstPlayer Adv');
    }

    public function testFifteenAll()
    {
        $this->game->firstPlayerWinPoint();
        $this->game->secondPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-All');
    }


    public function testLoveThirty()
    {
        $this->game->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Love-Thirty');
    }

    public function testLoveFifteen()
    {
        $this->game->secondPlayerWinPoint();
        $this->scoreShouldBe('Love-Fifteen');
    }

    public function testFortyLove()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->scoreShouldBe('Forty-Love');
    }

    public function testThirtyLove()
    {
        $this->game->firstPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }
}
