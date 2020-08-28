<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game022;

class Game022Test extends TestCase
{
    protected function setUp(): void
    {
        $this->sut = new Game022();
    }


    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }
}
