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
        $this->sut = new Game027();
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

    public function testThirtyLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Thirty-Love');
    }

    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen-Love');
    }

}