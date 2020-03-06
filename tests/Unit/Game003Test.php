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
        $this->scoreShouldBe('Love-All');
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
        $this->game->setPlayer1Score(1);
        $this->scoreShouldBe('Fifteen-Love');
    }

    /**
     * @test
     */
    public function getScore_Give2vs0_ReturnThirtyLove()
    {
        $this->game->setPlayer1Score(2);
        $this->scoreShouldBe('Thirty-Love');
    }

    /**
     * @test
     */
    public function getScore_Give3vs0_ReturnFortyLove()
    {
        $this->game->setPlayer1Score(3);
        $this->scoreShouldBe('Forty-Love');
    }

    /**
     * @test
     */
    public function getScore_Give1vs1_ReturnFifteenAll()
    {
        $this->game->setPlayer1Score(1);
        $this->game->setPlayer2Score(1);
        $this->scoreShouldBe('Fifteen-All');
    }

    /**
     * @test
     */
    public function getScore_Give3vs3_ReturnDeuce()
    {
        $this->game->setPlayer1Score(3);
        $this->game->setPlayer2Score(3);
        $this->scoreShouldBe('Deuce');
    }

}
