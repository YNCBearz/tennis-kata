<?php
namespace App\TennisGame;

class Game002
{
    private $p1_score = 0;
    private $p2_score = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty'
    ];

    public function getScore()
    {
        $p1_score = $this->p1_score;
        $p2_score = $this->p2_score;

        if ($this->isScoreEqual()) {
            return $this->lookup[$p1_score] . '-All';
        }

        return $this->lookup[$p1_score] . '-' . $this->lookup[$p2_score];
    }

    public function player1Tally()
    {
        $this->p1_score++;
    }

    public function player2Tally()
    {
        $this->p2_score++;
    }

    private function isScoreEqual()
    {
        return ($this->p1_score == $this->p2_score);
    }
}