<?php

namespace Tests\Unit;

use App\TennisGame\Game015;
use PHPUnit\Framework\TestCase;

class Game015Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game015();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }
}
