<?php

namespace Tests\TennisGame;

use App\TennisGame\Game033;
use PHPUnit\Framework\TestCase;

class Game033Test extends TestCase
{
    protected $sut;

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->scoreShouldBe('Love All');
    }

    public function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    protected function setUp(): void
    {
        $this->sut = new Game033('Bear', 'Lin');
    }

    /**
     * @test
     */
    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen Love');
    }

    /**
     * @test
     */
    public function testFortyLove()
    {
        $this->givenFirstPlayerWinPoint(3);
        $this->scoreShouldBe('Forty Love');
    }

    /**
     * @test
     */
    public function testThirtyLove()
    {
        $this->givenFirstPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty Love');
    }

    private function givenFirstPlayerWinPoint($times = 1)
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
        $this->givenSecondPlayerWinPoint(2);
        $this->scoreShouldBe('Love Thirty');
    }

    private function givenSecondPlayerWinPoint($times = 1)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->sut->secondPlayerWinPoint();
        }
    }

    /**
     * @test
     */
    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Love Fifteen');
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
        $this->givenFirstPlayerWinPoint(3);
        $this->givenSecondPlayerWinPoint(3);
        $this->scoreShouldBe('Deuce');
    }

    /**
     * @test
     */
    public function testLinAdv()
    {
        $this->givenFirstPlayerWinPoint(3);
        $this->givenSecondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin Adv');
    }

    /**
     * @test
     */
    public function testLinWin()
    {
        $this->givenFirstPlayerWinPoint(2);
        $this->givenSecondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin Win');
    }

    /**
     * @test
     */
    public function testBearWin()
    {
        $this->givenFirstPlayerWinPoint(4);
        $this->givenSecondPlayerWinPoint(2);
        $this->scoreShouldBe('Bear Win');
    }

    /**
     * @test
     */
    public function testBearAdv()
    {
        $this->givenFirstPlayerWinPoint(4);
        $this->givenSecondPlayerWinPoint(3);
        $this->scoreShouldBe('Bear Adv');
    }
}