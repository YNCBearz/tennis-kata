<?php

namespace Tests\TennisGame;

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

    public function givenSecondPlayerWinTimes($times = 1): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->secondPlayerWinPoint();
        }
    }

    protected function setUp(): void
    {
        $this->sut = new Game031('Bear', 'Lin');
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
        $this->givenSecondPlayerWinTimes(2);
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

    /**
     * @test
     */
    public function testThirtyAll()
    {
        $this->givenFirstPlayerWinTimes(2);
        $this->givenSecondPlayerWinTimes(2);
        $this->scoreShouldBe('Thirty-All');
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
    public function testDeuce()
    {
        $this->givenFirstPlayerWinTimes(3);
        $this->givenSecondPlayerWinTimes(3);
        $this->scoreShouldBe('Deuce');
    }

    /**
     * @test
     */
    public function testBearWin()
    {
        $this->givenFirstPlayerWinTimes(4);
        $this->givenSecondPlayerWinTimes(2);
        $this->scoreShouldBe('Bear Win');
    }

    /**
     * @test
     */
    public function testBearAdv()
    {
        $this->givenFirstPlayerWinTimes(4);
        $this->givenSecondPlayerWinTimes(3);
        $this->scoreShouldBe('Bear Adv');
    }

    /**
     * @test
     */
    public function testLinWin()
    {
        $this->givenFirstPlayerWinTimes(2);
        $this->givenSecondPlayerWinTimes(4);
        $this->scoreShouldBe('Lin Win');
    }

    /**
     * @test
     */
    public function testLinAdv()
    {
        $this->givenFirstPlayerWinTimes(3);
        $this->givenSecondPlayerWinTimes(4);
        $this->scoreShouldBe('Lin Adv');
    }
}