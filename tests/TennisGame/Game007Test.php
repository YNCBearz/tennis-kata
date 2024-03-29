<?php

namespace Tests\TennisGame;

use App\TennisGame\Game007;
use PHPUnit\Framework\TestCase;

class Game007Test extends TestCase
{
    protected $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game007();
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    public function testFifteenLove()
    {
        $this->game->firstPlayerWinPoints();
        $this->scoreShouldBe('Fifteen-Love');
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }

    public function testThirtyLove()
    {
        $this->game->firstPlayerWinPoints(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    public function testFortyLove()
    {
        $this->game->firstPlayerWinPoints(3);
        $this->scoreShouldBe('Forty-Love');
    }

    public function testLoveFifteen()
    {
        $this->game->secondPlayerWinPoints(1);
        $this->scoreShouldBe('Love-Fifteen');
    }

    public function testLoveThirty()
    {
        $this->game->secondPlayerWinPoints(2);
        $this->scoreShouldBe('Love-Thirty');
    }

    public function testFifteenAll()
    {
        $this->game->firstPlayerWinPoints();
        $this->game->secondPlayerWinPoints();
        $this->scoreShouldBe('Fifteen-All');
    }

    public function test3v3Deuce()
    {
        $this->game->firstPlayerWinPoints(3);
        $this->game->secondPlayerWinPoints(3);
        $this->scoreShouldBe('Deuce');
    }

    public function test4v4Deuce()
    {
        $this->game->firstPlayerWinPoints(4);
        $this->game->secondPlayerWinPoints(4);
        $this->scoreShouldBe('Deuce');
    }

    public function testFirstPlayerAdv()
    {
        $this->game->firstPlayerWinPoints(4);
        $this->game->secondPlayerWinPoints(3);
        $this->scoreShouldBe('FirstPlayer Adv');
    }

    public function testSecondPlayerAdv()
    {
        $this->game->firstPlayerWinPoints(4);
        $this->game->secondPlayerWinPoints(5);
        $this->scoreShouldBe('SecondPlayer Adv');
    }

    public function testFirstPlayerWin()
    {
        $this->game->firstPlayerWinPoints(4);
        $this->game->secondPlayerWinPoints(2);
        $this->scoreShouldBe('FirstPlayer Win');
    }

    public function testSecondPlayerWin()
    {
        $this->game->firstPlayerWinPoints(4);
        $this->game->secondPlayerWinPoints(6);
        $this->scoreShouldBe('SecondPlayer Win');
    }
}
