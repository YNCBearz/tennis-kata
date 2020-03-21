<?php
namespace Tests\Unit;

use App\TennisGame\Game005;
use PHPUnit\Framework\TestCase;

class Game005Test extends TestCase
{
    protected function setUp(): void
    {
        $this->game = new Game005();
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
        $this->game->player1Tally();
        $this->game->player1Tally();
        $this->game->player1Tally();

        $this->scoreShouldBe('Forty-Love');
    }


}
