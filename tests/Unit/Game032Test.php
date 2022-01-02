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
    public function testLoveThirty()
    {
        $this->givenSecondPlayerWinPoint(2);
        $this->scoreShouldBe('love thirty');
    }

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

    public function givenSecondPlayerWinPoint(int $times): void
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->secondPlayerWinPoint();
        }
    }

    protected function setUp(): void
    {
        $this->sut = new Game032('Bear', 'Lin');
    }

    /**
     * @test
     */
    public function testDeuce()
    {
        $this->givenFirstPlayerWinPoint(3);
        $this->givenSecondPlayerWinPoint(3);
        $this->scoreShouldBe('deuce');
    }

    /**
     * @test
     */
    public function testLinAdv()
    {
        $this->givenFirstPlayerWinPoint(3);
        $this->givenSecondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin adv');
    }

    /**
     * @test
     */
    public function testBearAdv()
    {
        $this->givenFirstPlayerWinPoint(4);
        $this->givenSecondPlayerWinPoint(3);
        $this->scoreShouldBe('Bear adv');
    }


    /**
     * @test
     */
    public function testLinWin()
    {
        $this->givenFirstPlayerWinPoint(2);
        $this->givenSecondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin win');
    }

    /**
     * @test
     */
    public function testBearWin()
    {
        $this->givenFirstPlayerWinPoint(4);
        $this->givenSecondPlayerWinPoint(2);
        $this->scoreShouldBe('Bear win');
    }
}