<?php

namespace Tests\Unit;

use App\TennisGame\Game032;
use PHPUnit\Framework\TestCase;

class Game032Test extends TestCase
{
    protected Game032 $sut;

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->scoreShouldBe('love all');
    }

    public function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    protected function setUp(): void
    {
        $this->sut = new Game032();
    }

}