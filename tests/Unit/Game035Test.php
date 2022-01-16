<?php

namespace Tests\Unit;

use App\TennisGame\Game035;
use PHPUnit\Framework\TestCase;

class Game035Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game035('Bear', 'Lin');
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

    /**
     * @test
     */
    public function testLoveThirty()
    {
        $this->givenSecondPlayerWinPointTimes(2);
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

    private function givenSecondPlayerWinPointTimes($times): void
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
        $this->givenDeuce();
        $this->scoreShouldBe('Deuce');
    }

    private function givenDeuce(): void
    {
        $this->givenFirstPlayerWinPointTimes(3);
        $this->givenSecondPlayerWinPointTimes(3);
    }

    /**
     * @test
     */
    public function testLinWin()
    {
        $this->givenDeuce();
        $this->givenSecondPlayerWinPointTimes(2);
        $this->scoreShouldBe('Lin Win');
    }

    /**
     * @test
     */
    public function testLinAdv()
    {
        $this->givenDeuce();
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Lin Adv');
    }

    /**
     * @test
     */
    public function testBearAdv()
    {
        $this->givenDeuce();
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Bear Adv');
    }
}
