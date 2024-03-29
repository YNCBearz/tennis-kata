<?php

namespace Tests\TennisGame;

use App\TennisGame\Game015;
use PHPUnit\Framework\TestCase;

class Game015Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game015();
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    public function testThirtyAll()
    {
        $this->game->firstPlayerWinPoint(2);
        $this->game->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-All');
    }

    public function testFifteenAll()
    {
        $this->game->firstPlayerWinPoint();
        $this->game->secondPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-All');
    }

    public function testFirstPlayerWin()
    {
        $this->game->firstPlayerWinPoint(5);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('FirstPlayer Win');
    }

    public function testSecondPlayerWin()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(5);
        $this->scoreShouldBe('SecondPlayer Win');
    }

    public function testSecondPlayerAdv()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(4);
        $this->scoreShouldBe('SecondPlayer Adv');
    }

    public function testFirstPlayerAdv()
    {
        $this->game->firstPlayerWinPoint(4);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('FirstPlayer Adv');
    }

    public function testFifteenLove()
    {
        $this->game->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function test5v5Deuce()
    {
        $this->game->firstPlayerWinPoint(5);
        $this->game->secondPlayerWinPoint(5);
        $this->scoreShouldBe('Deuce');
    }

    public function testDeuce()
    {
        $this->game->firstPlayerWinPoint(4);
        $this->game->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Deuce');
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

    public function testLoveForty()
    {
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Love-Forty');
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


    private function scoreShouldBe($expected)
    {
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }
}
