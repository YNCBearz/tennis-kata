<?php
namespace App\TennisGame;

class Game010
{
    private $p1Point = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen'
    ];

    public function score()
    {
        if ($this->p1Point == 1) {
            return $this->lookup[$this->p1Point] . '-Love';
        }
        return 'Love-All';
    }

    public function player1WinPoint()
    {
        $this->p1Point++;
    }
}