<?php
namespace Tests\Unit;

use App\TennisGame\Game002;
use PHPUnit\Framework\TestCase;

class Game002Test extends TestCase
{
    private $game;

    protected function setUp(): void
    {
        parent::setUp();
        $this->game = new Game002();
    }

    public function testGetScore_Give0vs0_ReturnLoveAll()
    {
        $this->scoreShouldBe('Love-All');
    }

    public function testGetScore_Give1vs0_ReturnFifteenLove()
    {
        $this->game->player1Tally();
        $this->scoreShouldBe('Fifteen-Love');
    }

    public function testGetScore_Give0vs1_ReturnLoveFifteen()
    {
        $this->game->player2Tally();
        $this->scoreShouldBe('Love-Fifteen');
    }

    public function testGetScore_Give1vs1_ReturnFifteenAll()
    {
        $this->game->player1Tally();
        $this->game->player2Tally();
        $this->scoreShouldBe('Fifteen-All');
    }

    public function testGetScore_Give2vs1_ReturnThirtyFifteen()
    {
        $this->setPlayer1Score(2);
        $this->setPlayer2Score(1);
        $this->scoreShouldBe('Thirty-Fifteen');
    }

    public function testGetScore_Give3vs1_ReturnFortyFifteen()
    {
        $this->setPlayer1Score(3);
        $this->setPlayer2Score(1);
        $this->scoreShouldBe('Forty-Fifteen');
    }

    private function setPlayer1Score($score)
    {
        for ($i = 0; $i < $score; $i++) {
            $this->game->player1Tally();
        }
    }

    private function setPlayer2Score($score)
    {
        for ($i = 0; $i < $score; $i++) {
            $this->game->player2Tally();
        }
    }

    private function scoreShouldBe($expected)
    {
        $actual = $this->game->getScore();
        $this->assertEquals($expected, $actual);
    }
}
