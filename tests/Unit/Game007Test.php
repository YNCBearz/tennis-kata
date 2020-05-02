<?php
namespace Tests\Unit;

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
}
