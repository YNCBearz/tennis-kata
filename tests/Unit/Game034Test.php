<?php

namespace Tests\Unit;

use App\TennisGame\Game034;
use PHPUnit\Framework\TestCase;

class Game034Test extends TestCase
{
    protected $sut;

    public function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    protected function setUp(): void
    {
        $this->sut = new Game034();
    }

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->scoreShouldBe('Love All');
    }

    /**
     * @test
     */
    public function testFortyLove()
    {
        $this->givenFirstPlayerWinTimes(3);
        $this->scoreShouldBe('Forty Love');
    }

    /**
     * @test
     */
    public function testThirtyLove()
    {
        $this->givenFirstPlayerWinTimes(2);
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

    private function givenFirstPlayerWinTimes($times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->firstPlayerWinPoint();
        }
    }

    /**
     * @test
     */
    public function testLoveThirty()
    {
        $this->givenSecondPlayerWinTimes(2);
        $this->scoreShouldBe('Love Thirty');
    }

    /**
     * @test
     */
    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Love Fifteen');
    }

    private function givenSecondPlayerWinTimes($times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->secondPlayerWinPoint();
        }
    }

    /**
     * @test
     */
    public function testFifteenAll()
    {
        $this->sut->firstPlayerWinPoint();
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Fifteen All');
    }

    /**
     * @test
     */
    public function testDeuce()
    {
        $this->givenFirstPlayerWinTimes(3);
        $this->givenSecondPlayerWinTimes(3);
        $this->scoreShouldBe('Deuce');
    }
}