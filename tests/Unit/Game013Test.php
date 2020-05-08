<?php
namespace Tests\Unit;

use App\TennisGame\Game013;
use PHPUnit\Framework\TestCase;

class Game013Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game013();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }
}