<?php
namespace App\TennisGame;

class Game004
{
    protected $p1_score = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function getScore()
    {
        if ($this->p1_score > 0) {
            return $this->lookup[$this->p1_score] . '-Love';
        }

        return 'Love-All';
    }

    public function player1Tally()
    {
        $this->p1_score++;
    }
}