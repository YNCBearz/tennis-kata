<?php

namespace Tests\Unit;

use App\TennisGame\Game031;
use PHPUnit\Framework\TestCase;

class Game031Test extends TestCase
{
    protected Game031 $sut;

    public function scoreShouldBe($expected): void
    {
        $actual = $this->sut->score();
        $this->assertEquals($expected, $actual);
    }

    protected function setUp(): void
    {
        $this->sut = new Game031();
    }

    /**
     * @test
     */
    public function testLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }
}