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
}