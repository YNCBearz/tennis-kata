<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\TennisGame\Game019;
use App\TennisGame\Player;

class Game019Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        parent::setUp();

        $firstPlayer = new Player('Bear');
        $secondPlayer = new Player('Lin');
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

    public function testLoveFifteen()
    {
        $this->sut->secondPlayerWinPoint(1);
        $this->scoreShouldBe('LoveFifteeen');
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
