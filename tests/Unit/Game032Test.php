<?php

namespace Tests\Unit;

use App\TennisGame\Game032;
use PHPUnit\Framework\TestCase;

class Game032Test extends TestCase
{
    protected Game032 $sut;

    /**
     * @test
     */
    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('love fifteen');
    }

    /**
     * @test
     */
    public function testFortyLove()
    {
        $this->givenFirstPlayerWinPoint(3);
        $this->scoreShouldBe('forty love');
    }

    /**
     * @test
     */
    public function testThirtyLove()
    {
        $this->givenFirstPlayerWinPoint(2);
        $this->scoreShouldBe('thirty love');
    }

    /**
     * @test
     */
    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('fifteen love');
    }

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->scoreShouldBe('love all');
    }

    public function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    public function givenFirstPlayerWinPoint(int $times = 1): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->firstPlayerWinPoint();
        }
    }

    protected function setUp(): void
    {
        $this->sut = new Game032();
    }

}