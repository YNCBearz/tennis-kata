<?php
namespace Tests\Unit;

use App\TennisGame\Game003;
use PHPUnit\Framework\TestCase;

class Game003Test extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game003();
    }

    /**
     * @test
     */
    public function getScore_Give0vs0_ReturnLoveAll()
    {
        //Arrange
        $expected = 'Love-All';
        //Act
        $actual = $this->game->getScore();
        //Assert
        $this->assertEquals($expected, $actual);
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->game->getScore();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give1vs0_ReturnFifteenAll()
    {
        $this->game->player1Tally();
        $this->scoreShouldBe('Fifteen-Love');
    }
}
