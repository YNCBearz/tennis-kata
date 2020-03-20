<?php
namespace App\TennisGame;

class Game004
{
    protected $p1_score = 0;
    protected $p2_score = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function getScore()
    {

        if ($this->isEqualScore()) {
            return $this->lookup[$this->p1_score] . '-All';
        }

        if ($this->p1_score > 0) {
            return $this->lookup[$this->p1_score] . '-Love';
        }

    }

    private function isEqualScore()
    {
        return ($this->p1_score == $this->p2_score);
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