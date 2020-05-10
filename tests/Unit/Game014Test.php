<?php

namespace Tests\Unit;

use App\TennisGame\Game014;
use PHPUnit\Framework\TestCase;

class Game014Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game014();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }
}
