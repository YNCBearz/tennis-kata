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
        $expected = 'Love-All';
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }

}