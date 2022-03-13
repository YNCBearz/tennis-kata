<?php

namespace Tests\TennisGame;

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

    /**
     * @test
     */
    public function getScore_Give5vs4_ReturnPlayer1Adv()
    {
        //Arrange
        $this->game->setPlayer1Score(5);
        $this->game->setPlayer2Score(4);

        $expected = 'Player1 Adv';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give3vs4_ReturnPlayer2Adv()
    {
        //Arrange
        $this->game->setPlayer1Score(3);
        $this->game->setPlayer2Score(4);

        $expected = 'Player2 Adv';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give4vs5_ReturnPlayer2Adv()
    {
        //Arrange
        $this->game->setPlayer1Score(4);
        $this->game->setPlayer2Score(5);

        $expected = 'Player2 Adv';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give4vs1_ReturnPlayer1Win()
    {
        //Arrange
        $this->game->setPlayer1Score(4);
        $this->game->setPlayer2Score(1);

        $expected = 'Player1 Win';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give1vs4_ReturnPlayer2Win()
    {
        //Arrange
        $this->game->setPlayer1Score(1);
        $this->game->setPlayer2Score(4);

        $expected = 'Player2 Win';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }


}
