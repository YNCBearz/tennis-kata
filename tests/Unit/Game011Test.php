<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game011;

class Game011Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game011();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }

}