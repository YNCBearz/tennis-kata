<?php

namespace Tests\Unit;

use App\TennisGame\Game030;
use PHPUnit\Framework\TestCase;

class Game030Test extends TestCase
{
    protected $sut;

    public function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    public function givenFirstPlayerWinPoint($times = 1): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->firstPlayerWinPoint();
        }
    }

    public function givenSecondPlayerWinPoint($times = 1): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->secondPlayerWinPoint();
        }
    }

    protected function setUp(): void
    {
        $this->sut = new Game030();
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
    public function testFifteenAll()
    {
        $this->sut->firstPlayerWinPoint();
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-All');
    }

    /**
     * @test
     */
    public function testThirtyAll()
    {
        $this->givenFirstPlayerWinPoint(2);
        $this->givenSecondPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-All');
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
    public function testThirtyLove()
    {
        $this->givenFirstPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    /**
     * @test
     */
    public function testFortyLove()
    {
        $this->givenFirstPlayerWinPoint(3);
        $this->scoreShouldBe('Forty-Love');
    }

    /**
     * @test
     */
    public function testLoveForty()
    {
        $this->givenSecondPlayerWinPoint(3);
        $this->scoreShouldBe('Love-Forty');
    }

    /**
     * @test
     */
    public function testLoveThirty()
    {
        $this->givenSecondPlayerWinPoint(2);
        $this->scoreShouldBe('Love-Thirty');
    }

    /**
     * @test
     */
    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Love-Fifteen');
    }


}