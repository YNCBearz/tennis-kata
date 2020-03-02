<?php
namespace Tests\Unit;

use App\TennisGame\Game002;
use PHPUnit\Framework\TestCase;

class Game002Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game002();
    }

    public function testGetScore_Give0vs0_ReturnLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    public function testGetScore_Give1vs0_ReturnFifteenLove()
    {
        $this->game->player1Tally();
        $this->scoreShouldBe('Fifteen-Love');
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->game->getScore();
        $this->assertEquals($expected, $actual);
    }
}
