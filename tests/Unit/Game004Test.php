<?php
namespace Tests\Unit;

use App\TennisGame\Game004;
use PHPUnit\Framework\TestCase;

class Game004Test extends TestCase
{
    public $game;

    protected function setUp(): void
    {
        $this->game = new Game004();
    }

    /**
     * @test
     */
    public function getScore_LoveAll()
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
    public function getScore_FifteenLove()
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
