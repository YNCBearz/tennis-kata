<?php
namespace App\TennisGame;

class Game012
{
    private $p1Point = 0;

    public function score()
    {
        if ($this->p1Point == 1) {
            return 'Fifteen-Love';
        }
        return 'Love-All';
    }

    public function player1WinPoint()
    {
        $this->p1Point++;
    }
}