<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game019;

class Game019Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new Game019();
    }

    public function testLoveAll()
    {
        $expected = 'LoveAll';
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }
}
