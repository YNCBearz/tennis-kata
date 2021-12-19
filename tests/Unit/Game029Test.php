<?php

namespace Tests\Unit;

use App\TennisGame\Game029;
use PHPUnit\Framework\TestCase;

class Game029Test extends TestCase
{
    protected Game029 $sut;

    public function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    protected function setUp(): void
    {
        $this->sut = new Game029();
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
    public function testThirtyLove()
    {
        $this->sut->firstPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    /**
     * @test
     */
    public function testFortyLove()
    {
        $this->sut->firstPlayerWinPoint(3);
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
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Love-Thirty');
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
        $this->sut->firstPlayerWinPoint(2);
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-All');
    }
}