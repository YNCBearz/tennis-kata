<?php
namespace Tests\Unit;

use App\TennisGame\Game008;
use PHPUnit\Framework\TestCase;

class Game008Test extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game008();
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

    public function testFifteenAll()
    {
        $this->game->firstPlayerWinPoint();
        $this->game->secondPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-All');
    }

    public function test3v3Deuce()
    {
        $this->game->firstPlayerWinPoint(3);
        $this->game->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Deuce');
    }
}
