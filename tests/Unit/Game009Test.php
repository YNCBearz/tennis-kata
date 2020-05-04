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
}