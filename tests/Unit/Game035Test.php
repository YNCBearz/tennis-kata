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
    public function testFortyLove()
    {
        $this->givenFirstPlayerWinPointTimes(3);
        $this->scoreShouldBe('Forty Love');
    }

    /**
     * @test
     */
    public function testThirtyLove()
    {
        $this->givenFirstPlayerWinPointTimes(2);
        $this->scoreShouldBe('Thirty Love');
    }

    /**
     * @test
     */
    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen Love');
    }

    private function givenFirstPlayerWinPointTimes($times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->firstPlayerWinPoint();
        }
    }
}
