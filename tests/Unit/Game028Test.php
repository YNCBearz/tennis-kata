<?php

namespace Tests\Unit;

use App\TennisGame\Game028;
use PHPUnit\Framework\TestCase;

class Game028Test extends TestCase
{
    /**
     * @var Game028
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game028('Bear', 'Lin');
    }

    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    protected function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint(1);
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

    public function testFifteenAll()
    {
        $this->sut->firstPlayerWinPoint(1);
        $this->sut->secondPlayerWinPoint(1);
        $this->scoreShouldBe('Fifteen-All');
    }

    public function testThirtyAll()
    {
        $this->sut->firstPlayerWinPoint(2);
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Thirty-All');
    }

    public function testDeuceWhen3v3()
    {
        $this->sut->firstPlayerWinPoint(3);
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Deuce');
    }

    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint(1);
        $this->scoreShouldBe('Love-Fifteen');
    }

    public function testLoveThirty()
    {
        $this->sut->secondPlayerWinPoint(2);
        $this->scoreShouldBe('Love-Thirty');
    }

    public function testLoveForty()
    {
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Love-Forty');
    }

    public function testBearAdv()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Bear Adv');
    }

    public function testBearAdvWhen5v4()
    {
        $this->sut->firstPlayerWinPoint(5);
        $this->sut->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Bear Adv');
    }

    public function testLinAdvWhen4v5()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(5);
        $this->scoreShouldBe('Lin Adv');
    }


}