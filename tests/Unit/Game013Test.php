<?php
namespace Tests\Unit;

use App\TennisGame\Game013;
use PHPUnit\Framework\TestCase;

class Game013Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game013();
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    public function testFifteenLove()
    {
        $this->game->player1WinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
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

    public function testLoveForty()
    {
        $this->game->player2WinPoint(3);
        $this->scoreShouldBe('Love-Forty');
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




}