<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Player;

class PlayerTest extends TestCase
{
    /**
     * @var Player
     */
    protected $sut;

    protected function setUp()
    {
        parent::setUp();
        $this->sut = new Player('test');
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
