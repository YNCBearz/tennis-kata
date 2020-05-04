<?php
namespace Tests\Unit;

use App\TennisGame\Game009;
use PHPUnit\Framework\TestCase;

class Game009Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game009();
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
        $this->game->secondPlayerWinPoint(1);
        $this->scoreShouldBe('Love-Fifteen');
    }

    public function testFifteenAll()
    {
        $this->game->firstPlayerWinPoint(1);
        $this->game->secondPlayerWinPoint(1);
        $this->scoreShouldBe('Fifteen-All');
    }

    public function test3v3Deuce()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Deuce');
    }

    public function testPlayer1Adv()
    {
        $this->game->firstPlayerWinPoint(4);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Player1 Adv');
    }

    public function testPlayer2Adv()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Player2 Adv');
    }

    public function testPlayer1Win()
    {
        $this->game->firstPlayerWinPoint(6);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Player1 Win');
    }
}