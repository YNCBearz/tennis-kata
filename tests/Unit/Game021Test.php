<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game021;

class Game021Test extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        $this->sut = new Game021();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }
}
