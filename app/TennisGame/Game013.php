<?php
namespace App\TennisGame;

class Game013
{
    private $p1Point = 0;

    public function score()
    {
        if ($this->p1Point == 2) {
            return 'Thirty-Love';
        }

        if ($this->p1Point == 1) {
            return 'Fifteen-Love';
        }

        return 'Love-All';
    }

    public function player1WinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->p1Point++;
        }
    }
}