<?php
namespace App\TennisGame;

class Game005
{
    public $p1_score = 0;
    public $p2_score = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty'
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

    private function isScoreDiffent()
    {
        return ($this->p1_score !== $this->p2_score);
    }
}