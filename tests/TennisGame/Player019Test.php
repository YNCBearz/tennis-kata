<?php

namespace Tests\TennisGame;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Player019;

class Player019Test extends TestCase
{
    /**
     * @var Player019
     */
    protected $sut;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sut = new Player019('test');
    }

    public function testGetName()
    {
        $expected = 'test';
        $actual = $this->sut->getName();
        $this->assertEquals($expected, $actual);
    }

    public function testGetPoint()
    {
        $expected = 0;
        $actual = $this->sut->getPoint();
        $this->assertEquals($expected, $actual);
    }

    public function testWinPoint()
    {
        $expected = 1;
        $this->sut->winPoint();
        $actual = $this->sut->getPoint();
        $this->assertEquals($expected, $actual);
    }
}
