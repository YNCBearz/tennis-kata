<?php
namespace App\TennisGame;

class Game003
{
    private $p1_score = 0;
    private $p2_score = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function getScore()
    {
        $p1_score = $this->p1_score;
        $p2_score = $this->p2_score;

        if ($p1_score == 0 && $p2_score == 0) {
            return 'Love-All';
        }

        return $this->lookup[$p1_score] . '-' . $this->lookup[$p2_score];
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
