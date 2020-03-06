<?php
namespace App\TennisGame;

class Game003
{
    private $p1_score;

    public function getScore()
    {
        $p1_score = $this->p1_score;

        if ($p1_score == 2) {
            return 'Thirty-Love';
        }

        if ($p1_score == 1) {
            return 'Fifteen-Love';
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
}
