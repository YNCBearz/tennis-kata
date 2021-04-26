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
        $this->sut = new Game028();
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


}