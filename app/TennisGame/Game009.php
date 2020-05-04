<?php
namespace App\TennisGame;

class Game009
{
    private $p1Point = 0;

    private $p2Point = 0;

    private $lookUp = [
        0 => 'Love',
        1 => 'Fifteen'
    ];

    public function score()
    {
        if ($this->p1Point > 0) {
            return $this->lookUp[$this->p1Point] . '-' . $this->lookUp[$this->p2Point];
        }
        return 'Love-All';
    }

    public function firstPlayerWinPoint()
    {
        $this->p1Point++;
    }
}