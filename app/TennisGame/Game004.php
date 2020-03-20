<?php
namespace App\TennisGame;

class Game004
{
    protected $p1_score = 0;

    public function getScore()
    {
        if ($this->p1_score == 1) {
            return 'Fifteen-Love';
        }

        if ($this->p1_score == 2) {
            return 'Thirty-Love';
        }

        if ($this->p1_score == 3) {
            return 'Forty-Love';
        }

        return 'Love-All';
    }

    public function player1Tally()
    {
        $this->p1_score++;
    }
}