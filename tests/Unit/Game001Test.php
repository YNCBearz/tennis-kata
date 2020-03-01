<?php
namespace Tests\Unit;

use App\TennisGame\Game001;
use PHPUnit\Framework\TestCase;

class Game001Test extends TestCase
{
    protected $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game001();
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

    /**
     * @test
     */
    public function getScore_Give1vs0_ReturnFifteenLove()
    {
        //Arrange
        $this->game->player1Tally();
        $expected = 'Fifteen-Love';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }
}