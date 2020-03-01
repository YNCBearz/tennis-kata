<?php
namespace App\TennisGame;

class Game001
{
    private $pl_score = 0;
    private $p2_score = 0;

    public function getScore()
    {
        $pl_score = $this->pl_score;
        $p2_score = $this->p2_score;

        if ($p2_score == 1) {
            return 'Love-Fifteen';
        }

        if ($pl_score == 1) {
            return 'Fifteen-Love';
        }
        return 'Love-All';
    }

    public function player1Tally()
    {
        $this->pl_score++;
    }

    public function player2Tally()
    {
        $this->p2_score++;
    }
}