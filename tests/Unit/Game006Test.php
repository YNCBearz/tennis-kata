<?php
namespace Tests\Unit;

use App\TennisGame\Game006;
use PHPUnit\Framework\TestCase;

class Game006Test extends TestCase
{
    public $game;

    protected function setUp(): void
    {
        $this->game = new Game006();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';

        $actual = $this->game->score();

        $this->assertEquals($expected, $actual);
    }

}