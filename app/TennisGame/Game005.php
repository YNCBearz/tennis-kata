<?php
namespace App\TennisGame;

class Game005
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
        if ($this->isScoreDiffent()) {
            return $this->lookup[$this->p1_score] . '-' . $this->lookup[$this->p2_score];
        }

        return 'Love-All';
    }

    public function player1Tally()
    {
        $this->p1_score++;
    }

    public function setPlayer1Score($score)
    {
        $this->p1_score = $score;
    }

    public function setPlayer2Score($score)
    {
        $this->p2_score = $score;
    }

    private function isScoreDiffent()
    {
        return ($this->p1_score !== $this->p2_score);
    }
}