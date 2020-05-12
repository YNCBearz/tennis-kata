<?php

namespace Tests\Unit;

use App\TennisGame\Game016;
use PHPUnit\Framework\TestCase;

class Game016Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game016();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }
}
