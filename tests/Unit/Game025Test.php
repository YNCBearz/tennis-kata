<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game025;

class Game025Test extends TestCase
{
    /**
     * @var Game025
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game025();
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function testThirtyLove()
    {
        $this->sut->firstPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-Love');
    }
}
