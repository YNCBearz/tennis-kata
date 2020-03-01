<?php
namespace App\TennisGame;

class Game001
{
    private $pl_score = 0;

    public function getScore()
    {
        $pl_score = $this->pl_score;

        if ($pl_score == 1) {
            return 'Fifteen-Love';
        }
        return 'Love-All';
    }

    public function player1Tally()
    {
        $this->pl_score++;
    }
}