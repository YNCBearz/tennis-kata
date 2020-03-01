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

    /**
     * @test
     */
    public function getScore_Give0vs1_ReturnLoveFifteen()
    {
        //Arrange
        $this->game->player2Tally();
        $expected = 'Love-Fifteen';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give1vs1_ReturnFifteenAll()
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

    private function givenPlayer1Score($score)
    {
        for ($i = 0; $i < $score; $i++) {
            $this->game->player1Tally();
        }
    }

    private function givenPlayer2Score($score)
    {
        for ($i = 0; $i < $score; $i++) {
            $this->game->player2Tally();
        }
    }

    /**
     * @test
     */
    public function getScore_Give2vs0_ReturnThirtyLove()
    {
        //Arrange
        $this->givenPlayer1Score(2);

        $expected = 'Thirty-Love';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give0vs3_ReturnLoveForty()
    {
        //Arrange
        $this->givenPlayer2Score(3);

        $expected = 'Love-Forty';

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
        $this->givenPlayer1Score(4);
        $this->givenPlayer2Score(4);

        $expected = 'Deuce';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give4vs3_ReturnPlayer1Advantage()
    {
        //Arrange
        $this->givenPlayer1Score(4);
        $this->givenPlayer2Score(3);

        $expected = 'player1 advantage';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give3vs4_ReturnPlayer2Advantage()
    {
        //Arrange
        $this->givenPlayer1Score(3);
        $this->givenPlayer2Score(4);

        $expected = 'player2 advantage';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function getScore_Give5vs3_ReturnPlayer1Win()
    {
        //Arrange
        $this->givenPlayer1Score(5);
        $this->givenPlayer2Score(3);

        $expected = 'player1 wins';

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
        $this->givenPlayer1Score(1);
        $this->givenPlayer2Score(4);

        $expected = 'player2 wins';

        //Act
        $actual = $this->game->getScore();

        //Assert
        $this->assertEquals($expected, $actual);
    }
}