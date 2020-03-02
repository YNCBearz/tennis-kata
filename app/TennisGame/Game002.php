<?php
namespace App\TennisGame;

class Game002
{
    private $p1_score;

    public function getScore()
    {
        if ($this->p1_score == 1) {
            return 'Fifteen-Love';
        }

        return 'Love-All';
    }

    public function player1Tally()
    {
        $this->p1_score++;
    }
}