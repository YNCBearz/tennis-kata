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
        $expected = 'Love-All';
        $actual = $this->game->score();
        $this->assertEquals($expected, $actual);
    }
}
