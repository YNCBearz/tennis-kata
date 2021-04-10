<?php

namespace Tests\Unit;

use App\TennisGame\Game027;
use PHPUnit\Framework\TestCase;

class Game027Test extends TestCase
{
    /**
     * @var Game027
     */
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game027('Bear');
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

    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint();
        $this->scoreShouldBe('Love-Fifteen');
    }

    public function testFifteenAll()
    {
        $this->sut->firstPlayerWinPoint();
        $this->sut->secondPlayerWinPoint();
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

    public function testDeuceWhen4v4()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(4);
        $this->scoreShouldBe('Deuce');
    }

    public function testBearAdv()
    {
        $this->sut->firstPlayerWinPoint(4);
        $this->sut->secondPlayerWinPoint(3);
        $this->scoreShouldBe('Bear Adv');
    }

}