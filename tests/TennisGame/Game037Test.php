<?php

namespace Tests\TennisGame;

use App\TennisGame\Game037;
use PHPUnit\Framework\TestCase;

class Game037Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game037();
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
