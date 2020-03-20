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

    /**
     * @test
     */
    public function getScore_ThirtyLove()
    {
        //Arrange
        $this->game->player1Tally();
        $this->game->player1Tally();

        $expected = 'Thirty-Love';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_FortyLove()
    {
        //Arrange
        $this->game->player1Tally();
        $this->game->player1Tally();
        $this->game->player1Tally();

        $expected = 'Forty-Love';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_FifteenAll()
    {
        //Arrange
        $this->game->player1Tally();
        $this->game->player2Tally();

        $expected = 'Fifteen-All';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give3vs3_ReturnDeuce()
    {
        //Arrange
        $this->game->setPlayer1Score(3);
        $this->game->setPlayer2Score(3);

        $expected = 'Deuce';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give4vs4_ReturnDeuce()
    {
        //Arrange
        $this->game->setPlayer1Score(4);
        $this->game->setPlayer2Score(4);

        $expected = 'Deuce';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_ThirtyFifteen()
    {
        //Arrange
        $this->game->setPlayer1Score(2);
        $this->game->setPlayer2Score(1);

        $expected = 'Thirty-Fifteen';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give4vs3_ReturnPlayer1Adv()
    {
        //Arrange
        $this->game->setPlayer1Score(4);
        $this->game->setPlayer2Score(3);

        $expected = 'Player1 Adv';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }
}
