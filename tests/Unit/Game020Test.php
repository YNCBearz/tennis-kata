<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game020;

class Game020Test extends TestCase
{
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new Game020();
    }

    public function testLoveAll()
    {
        $expected = 'LoveAll';

        $actual = $this->sut->score();

        $this->assertEquals($expected, $actual);
    }

    public function testFifteenLove()
    {
        $expected = 'FifteenLove';

        $this->sut->firstPlayerWinPoint();
        $actual = $this->sut->score();

        $this->assertEquals($expected, $actual);
    }
}
