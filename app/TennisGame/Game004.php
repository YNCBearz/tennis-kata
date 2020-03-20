<?php
namespace App\TennisGame;

class Game004
{
    protected $p1_score = 0;
    protected $p2_score = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function getScore()
    {

        if ($this->isEqualScore()) {
            return $this->getEqualScore();
        }

        return $this->isAnyPlayerScoreOver4() ?
                    $this->getScoreOver4() :
                    $this->NormalScore();
    }

    private function getEqualScore()
    {
        return $this->isPlayer1ScoreOver3() ?
                $this->DeuceScore() :
                $this->AllScore();
    }

    private function isPlayer1ScoreOver3()
    {
        return $this->p1_score >= 3;
    }

    private function getScoreOver4()
    {
        return $this->isScoreDiffOver2() ?
                $this->WinScore() :
                $this->AdvScore();
    }

    private function isScoreDiffOver2()
    {
        $score_diff = abs($this->p1_score - $this->p2_score);
        return ($score_diff >= 2);
    }

    private function isAnyPlayerScoreOver4()
    {
        return ($this->p1_score >= 4 || $this->p2_score >= 4);
    }

    private function getAdvPlayer()
    {
        return ($this->p1_score > $this->p2_score) ?
                'Player1' :
                'Player2';
    }

    private function NormalScore()
    {
        return $this->lookup[$this->p1_score] . '-' . $this->lookup[$this->p2_score];

    }

    private function AllScore()
    {
        return $this->lookup[$this->p1_score] . '-All';
    }

    private function DeuceScore()
    {
        return 'Deuce';
    }

    private function isEqualScore()
    {
        return ($this->p1_score == $this->p2_score);
    }

    public function player1Tally()
    {
        $this->p1_score++;
    }

    public function player2Tally()
    {
        $this->p2_score++;
    }

    public function setPlayer1Score($score)
    {
        $this->p1_score = $score;
    }

    public function setPlayer2Score($score)
    {
        $this->p2_score = $score;
    }

    private function AdvScore()
    {
        return $this->getAdvPlayer() . ' Adv';
    }

    private function WinScore()
    {
        return $this->getAdvPlayer() . ' Win';
    }
}