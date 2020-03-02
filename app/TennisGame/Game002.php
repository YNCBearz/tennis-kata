<?php
namespace App\TennisGame;

class Game002
{
    private $p1_score;
    private $p2_score;

    public function getScore()
    {
        if ($this->p1_score == 1 && $this->p2_score == 1) {
            return 'Fifteen-All';
        }

        if ($this->p1_score == 1) {
            return 'Fifteen-Love';
        }

        if ($this->p2_score == 1) {
            return 'Love-Fifteen';
        }

        return 'Love-All';
    }

    public function player1Tally()
    {
        $this->p1_score++;
    }

    public function player2Tally()
    {
        $this->p2_score++;
    }
}