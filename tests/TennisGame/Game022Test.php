<?php

namespace Tests\TennisGame;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game022;

class Game022Test extends TestCase
{
    protected function setUp(): void
    {
        $this->sut = new Game022('Bear', 'Lin');
    }

    public function testSecondPlayerAdv()
    {
        $this->sut->firstPlayerWinPoint(3);
        $this->sut->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin Adv');
    }

    public function testSecondPlayerWin()
    {
        $this->sut->firstPlayerWinPoint(2);
        $this->sut->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin Win');
    }

    public function testFirstPlayerWin()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Bear Win');
    }

    public function testFirstPlayerAdv()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Bear Adv');
    }

    public function testDeuceWhen4v4()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Deuce');
    }

    public function testDeuceWhen3v3()
    {
        $this->sut->firstPlayerWinPoint(3);
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Deuce');
    }

    public function testThirtyAll()
    {
        $this->sut->firstPlayerWinPoint(2);
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-All');
    }

    public function testFifteenAll()
    {
        $this->sut->firstPlayerWinPoint();
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-All');
    }

    public function testLoveForty()
    {
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Love-Forty');
    }

    public function testLoveThirty()
    {
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Love-Thirty');
    }

    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Love-Fifteen');
    }

    public function testFortyLove()
    {
        $this->sut->firstPlayerWinPoint(3);
        $this->scoreShouldBe('Forty-Love');
    }

    public function testThirtyLove()
    {
        $this->sut->firstPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }
}
