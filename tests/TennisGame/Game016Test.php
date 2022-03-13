<?php

namespace Tests\TennisGame;

use App\TennisGame\Game016;
use PHPUnit\Framework\TestCase;

class Game016Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game016('Bear', 'Lin');
    }

    public function test4v4Deuce()
    {
        $this->game->firstPlayerWinPoint(4);
        $this->game->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Deuce');
    }

    public function testBearWin()
    {
        $this->game->firstPlayerWinPoint(7);
        $this->game->secondPlayerWinPoint(5);
        $this->scoreShouldBe('Bear Win');
    }

    public function testLinWin()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(5);
        $this->scoreShouldBe('Lin Win');
    }

    public function testLinAdv()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin Adv');
    }

    public function testBearAdv()
    {
        $this->game->firstPlayerWinPoint(4);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Bear Adv');
    }

    public function test3v3Deuce()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Deuce');
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

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    public function testFifteenLove()
    {
        $this->game->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
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
