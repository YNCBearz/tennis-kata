<?php

namespace Tests\Unit;

use App\TennisGame\Game027;
use PHPUnit\Framework\TestCase;

class Game027Test extends TestCase
{
    /**
     * @var Game027
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game027();
    }

    public function testLoveAll()
    {
        $expected = 'Love-All';
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

}