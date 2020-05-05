<?php
namespace Tests\Unit;

use App\TennisGame\Game010;
use PHPUnit\Framework\TestCase;

class Game010Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game010();
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

    public function testFifteenAll()
    {
        $this->game->player1WinPoint();
        $this->game->player2WinPoint();
        $this->scoreShouldBe('Fifteen-All');
    }

    public function test3v3Deuce()
    {
        $this->game->player1WinPoint(3);
        $this->game->player2WinPoint(3);
        $this->scoreShouldBe('Deuce');
    }

    public function test4v4Deuce()
    {
        $this->game->player1WinPoint(4);
        $this->game->player2WinPoint(4);
        $this->scoreShouldBe('Deuce');
    }

    public function testPlayer1Adv()
    {
        $this->game->player1WinPoint(4);
        $this->game->player2WinPoint(3);
        $this->scoreShouldBe('Player1 Adv');
    }



}