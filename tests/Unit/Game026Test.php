<?php

namespace Tests\Unit;

use App\TennisGame\Game026;

class Game026Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Game026
     */
    private $sut;

    protected function setUp(): void
    {
        $this->sut = new Game026('Bear', 'Lin');
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    private function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function testThirtyLove()
    {
        $this->sut->firstPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    public function testFortyLove()
    {
        $this->sut->firstPlayerWinPoint(3);
        $this->scoreShouldBe('Forty-Love');
    }

    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Love-Fifteen');
    }

    public function testLoveThirty()
    {
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Love-Thirty');
    }

    public function testFifteenAll()
    {
        $this->sut->firstPlayerWinPoint();
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-All');
    }

    public function testDeuceWhen3v3()
    {
        $this->sut->firstPlayerWinPoint(3);
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Deuce');
    }

    public function testDeuceWhen4v4()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Deuce');
    }

    public function testFirstPlayerWin()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->scoreShouldBe('Bear Win');
    }

    public function testSecondPlayerWin()
    {
        $this->sut->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin Win');
    }

    public function testFirstPlayerAdv()
    {
        $this->sut->firstPlayerWinPoint(5);
        $this->sut->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Bear Adv');
    }
}