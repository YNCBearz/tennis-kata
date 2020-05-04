<?php
namespace App\TennisGame;

class Game009
{
    private $p1Point = 0;

    private $p2Point = 0;

    private $lookUp = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty'
    ];

    public function score()
    {
        if ($this->p1Point > 0) {
            return $this->lookUp[$this->p1Point] . '-' . $this->lookUp[$this->p2Point];
        }
        return 'Love-All';
    }

    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p1Point++;
        }
    }
}