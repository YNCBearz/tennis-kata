<?php

namespace Tests\Unit;

use App\TennisGame\Game034;
use PHPUnit\Framework\TestCase;

class Game034Test extends TestCase
{
    protected $sut;

    public function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    protected function setUp(): void
    {
        $this->sut = new Game034();
    }

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->scoreShouldBe('Love All');
    }

    /**
     * @test
     */
    public function testThirtyLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Thirty Love');
    }

    /**
     * @test
     */
    public function testFifteenLove()
    {
        $this->sut->firstPlayerWinPoint();
        $this->scoreShouldBe('Fifteen Love');
    }

}