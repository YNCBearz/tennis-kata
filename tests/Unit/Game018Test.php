<?php

namespace Tests\Unit;

use App\TennisGame\Game018;
use PHPUnit\Framework\TestCase;

class Game018Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game018('Bear', 'Lin');
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

    public function testFifteenLove()
    {
        $this->game->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function test4v4Deuce()
    {
        $this->game->firstPlayerWinPoint(4);
        $this->game->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Deuce');
    }

    public function testLinAdv()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin Adv');
    }

    public function testBearWin()
    {
        $this->game->firstPlayerWinPoint(5);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Bear Win');
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

    private function scoreShouldBe($expected)
    {
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }
}
