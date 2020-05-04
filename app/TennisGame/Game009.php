<?php
namespace App\TennisGame;

class Game009
{
    private $p1Point = 0;

    public function score()
    {
        if ($this->p1Point > 0) {
            return 'Fifteen-Love';
        }
        return 'Love-All';
    }

    public function firstPlayerWinPoint()
    {
        $this->p1Point++;
    }
}