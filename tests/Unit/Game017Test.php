<?php

namespace Tests\Unit;

use App\TennisGame\Game017;
use PHPUnit\Framework\TestCase;

class Game017Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game017();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }
}
