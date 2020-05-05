<?php
namespace App\TennisGame;

class Game010
{
    private $p1Point = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->p1Point > 0) {
            return $this->lookup[$this->p1Point] . '-Love';
        }

        return 'Love-All';
    }

    public function player1WinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p1Point++;
        }
    }
}