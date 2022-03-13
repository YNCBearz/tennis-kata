<?php

namespace Tests\TennisGame;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game019;
use App\TennisGame\Player019;

class Game019Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        parent::setUp();

        $firstPlayer = new Player019('Bear');
        $secondPlayer = new Player019('Lin');
        $this->sut = new Game019($firstPlayer, $secondPlayer);
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('LoveAll');
    }

    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('FifteenLove');
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    public function testLoveThrity()
    {
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('LoveThirty');
    }

    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint(1);
        $this->scoreShouldBe('LoveFifteen');
    }

    public function test5v5Deuce()
    {
        $this->sut->firstPlayerWinPoint(5);
        $this->sut->secondPlayerWinPoint(5);
        $this->scoreShouldBe('Deuce');
    }

    public function testFirstPlayerAdv()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Bear Adv');
    }

    public function testFirstPlayerWin()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Bear Win');
    }

    public function testSecondPlayerAdv()
    {
        $this->sut->firstPlayerWinPoint(3);
        $this->sut->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Lin Adv');
    }

    public function testDeuce()
    {
        $this->sut->firstPlayerWinPoint(3);
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Deuce');
    }

    public function testFifteenAll()
    {
        $this->sut->firstPlayerWinPoint();
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('FifteenAll');
    }

    public function testThirtyLove()
    {
        $this->sut->firstPlayerWinPoint(2);
        $this->scoreShouldBe('ThirtyLove');
    }

    public function testFortyLove()
    {
        $this->sut->firstPlayerWinPoint(3);
        $this->scoreShouldBe('FortyLove');
    }
}
