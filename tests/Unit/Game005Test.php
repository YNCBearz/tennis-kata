<?php
namespace Tests\Unit;

use App\TennisGame\Game005;
use PHPUnit\Framework\TestCase;

class Game005Test extends TestCase
{
    protected function setUp(): void
    {
        $this->game = new Game005('Bear', 'Lin');
    }

    /**
     * @test
     */
    public function getScore_LoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    /**
     * @test
     */
    public function getScore_FifteenLove()
    {
        //Arrange
        $this->game->player1Tally();
        $this->scoreShouldBe('Fifteen-Love');
    }

    private function scoreShouldBe($expected)
    {
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

        $this->scoreShouldBe('Thirty-Love');
    }

    /**
     * @test
     */
    public function getScore_FortyLove()
    {
        //Arrange
        $this->game->setPlayer1Score(3);

        $this->scoreShouldBe('Forty-Love');
    }

    /**
     * @test
     */
    public function getScore_LoveFifteen()
    {
        //Arrange
        $this->game->setPlayer2Score(1);

        $this->scoreShouldBe('Love-Fifteen');
    }

    /**
     * @test
     */
    public function getScore_FifteenAll()
    {
        //Arrange
        $this->game->setPlayer1Score(1);
        $this->game->setPlayer2Score(1);

        $this->scoreShouldBe('Fifteen-All');
    }

    /**
     * @test
     */
    public function getScore_ThirtyAll()
    {
        //Arrange
        $this->game->setPlayer1Score(2);
        $this->game->setPlayer2Score(2);

        $this->scoreShouldBe('Thirty-All');
    }

    /**
     * @test
     */
    public function getScore_Give4vs4_ReturnDeuce()
    {
        //Arrange
        $this->game->setPlayer1Score(4);
        $this->game->setPlayer2Score(4);

        $this->scoreShouldBe('Deuce');
    }

    /**
     * @test
     */
    public function getScore_Give5vs5_ReturnDeuce()
    {
        //Arrange
        $this->game->setPlayer1Score(5);
        $this->game->setPlayer2Score(5);

        $this->scoreShouldBe('Deuce');
    }

    /**
     * @test
     */
    public function getScore_Give5vs4_ReturnBearAdv()
    {
        //Arrange
        $this->game->setPlayer1Score(5);
        $this->game->setPlayer2Score(4);

        $this->scoreShouldBe('Bear Adv');
    }

    /**
     * @test
     */
    public function getScore_Give4vs5_ReturnLinAdv()
    {
        //Arrange
        $this->game->setPlayer1Score(4);
        $this->game->setPlayer2Score(5);

        $this->scoreShouldBe('Lin Adv');
    }


}
