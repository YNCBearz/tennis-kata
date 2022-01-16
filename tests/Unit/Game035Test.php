<?php

namespace Tests\Unit;

use App\TennisGame\Game035;
use PHPUnit\Framework\TestCase;

class Game035Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game035();
    }

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->scoreShouldBe('Love All');
    }

    private function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen Love');
    }
}
