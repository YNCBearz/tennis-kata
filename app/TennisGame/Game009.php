<?php
namespace App\TennisGame;

class Game009
{
    private $p1Point = 0;

    private $p2Point = 0;

    private $lookUp = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->isSamePoint()) {
            return $this->sameScore();
        }

        if ($this->p1Point > 0 || $this->p2Point > 0) {
            return $this->lookUp[$this->p1Point] . '-' . $this->lookUp[$this->p2Point];
        }

    }

    private function isSamePoint()
    {
        return ($this->p1Point == $this->p2Point);
    }

    private function sameScore()
    {
        return $this->lookUp[$this->p1Point] . '-All';
    }

    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p1Point++;
        }
    }

    public function secondPlayerWinPoint($point = 1)
    {
        $this->p2Point++;
    }
}