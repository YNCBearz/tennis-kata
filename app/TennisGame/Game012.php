<?php
namespace App\TennisGame;

class Game012
{
    private $p1Point = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty'
    ];

    public function score()
    {
        if ($this->p1Point > 0) {
            return $this->translatePlayer1Point() . '-Love';
        }

        return 'Love-All';
    }

    private function translatePlayer1Point()
    {
        return $this->lookup[$this->p1Point];
    }

    public function player1WinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->p1Point++;
        }
    }
}