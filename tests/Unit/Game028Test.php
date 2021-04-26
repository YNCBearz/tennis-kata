<?php

namespace Tests\Unit;

use App\TennisGame\Game028;
use PHPUnit\Framework\TestCase;

class Game028Test extends TestCase
{
    /**
     * @var Game028
     */
    protected $sut;

    public function testLoveAll()
    {
        $this->sut = new Game028();
        $expected = 'Love-All';
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

}