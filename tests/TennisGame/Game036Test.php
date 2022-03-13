<?php

namespace Tests\TennisGame;

use App\TennisGame\Game036;
use PHPUnit\Framework\TestCase;

class Game036Test extends TestCase
{
    protected $sut;

    protected function setUp(): void
    {
        $this->sut = new Game036();
    }

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->scoreShouldBe('Love All');
    }

    private function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }
}
