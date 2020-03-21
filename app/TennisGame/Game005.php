<?php
namespace App\TennisGame;

class Game005
{
    public $p1_score = 0;

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