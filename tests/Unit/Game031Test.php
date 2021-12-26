<?php

namespace Tests\Unit;

use App\TennisGame\Game031;
use PHPUnit\Framework\TestCase;

class Game031Test extends TestCase
{
    protected Game031 $sut;

    public function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    protected function setUp(): void
    {
        $this->sut = new Game031();
    }

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    /**
     * @test
     */
    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    /**
     * @test
     */
    public function testFortyLove()
    {
        $this->givenFirstPlayerWinTimes(3);
        $this->scoreShouldBe('Forty-Love');
    }

    /**
     * @test
     */
    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Love-Fifteen');
    }

    /**
     * @test
     */
    public function testLoveThirty()
    {
        $this->sut->secondPlayerWinPoint();
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Love-Thirty');
    }

    /**
     * @test
     */
    public function testThirtyLove()
    {
        $this->givenFirstPlayerWinTimes(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    private function givenFirstPlayerWinTimes($times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->firstPlayerWinPoint();
        }
    }
}