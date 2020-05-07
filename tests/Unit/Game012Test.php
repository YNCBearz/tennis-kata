<?php
namespace Tests\Unit;

use App\TennisGame\Game012;
use PHPUnit\Framework\TestCase;

class Game012Test extends TestCase
{
    protected $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game012();
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
        $this->game->player1WinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function testThirtyLove()
    {
        $this->game->player1WinPoint(2);
        $this->scoreShouldBe('Thirty-Love');

    }

    public function testFortyLove()
    {
        $this->game->player1WinPoint(3);
        $this->scoreShouldBe('Forty-Love');
    }

    public function testLoveFifteen()
    {
        $this->game->player2WinPoint();
        $this->scoreShouldBe('Love-Fifteen');
    }

    public function testLoveThirty()
    {
        $this->game->player2WinPoint(2);
        $this->scoreShouldBe('Love-Thirty');
    }

    public function testFifteenAll()
    {
        $this->game->player1WinPoint();
        $this->game->player2WinPoint();
        $this->scoreShouldBe('Fifteen-All');
    }

    public function testPlayer1Adv()
    {
        $this->game->player1WinPoint(4);
        $this->game->player2WinPoint(3);
        $this->scoreShouldBe('Player1 Adv');
    }

    public function testPlayer2Adv()
    {
        $this->game->player1WinPoint(4);
        $this->game->player2WinPoint(5);
        $this->scoreShouldBe('Player2 Adv');
    }

}