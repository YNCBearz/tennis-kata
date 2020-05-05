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

}