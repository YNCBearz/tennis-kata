<?php

namespace Tests\TennisGame;

use App\TennisGame\Game003;
use PHPUnit\Framework\TestCase;

class Game003Test extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game003('Bear', 'Lin');
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

    /**
     * @test
     */
    public function getScore_Give4vs4_ReturnDeuce()
    {
        $this->game->setPlayer1Score(4);
        $this->game->setPlayer2Score(4);
        $this->scoreShouldBe('Deuce');
    }

    /**
     * @test
     */
    public function getScore_Give4vs3_ReturnAdvantageBear()
    {
        $this->game->setPlayer1Score(4);
        $this->game->setPlayer2Score(3);
        $this->scoreShouldBe('advantage Bear');
    }

    /**
     * @test
     */
    public function getScore_Give5vs6_ReturnAdvantageLin()
    {
        $this->game->setPlayer1Score(5);
        $this->game->setPlayer2Score(6);
        $this->scoreShouldBe('advantage Lin');
    }

    /**
     * @test
     */
    public function getScore_Give4vs2_ReturnBearWins()
    {
        $this->game->setPlayer1Score(4);
        $this->game->setPlayer2Score(2);
        $this->scoreShouldBe('Bear wins');
    }

    /**
     * @test
     */
    public function getScore_Give2vs4_ReturnLinWins()
    {
        $this->game->setPlayer1Score(2);
        $this->game->setPlayer2Score(4);
        $this->scoreShouldBe('Lin wins');
    }
}
