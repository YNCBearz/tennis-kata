<?php
namespace App\TennisGame;

class Game010
{
    private $p1Point = 0;

    private $p2Point = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->p1Point == $this->p2Point) {
            return $this->lookup[$this->p1Point] . '-All';
        }

        if ($this->p1Point > 0) {
            return $this->lookup[$this->p1Point] . '-Love';
        }

        if ($this->p2Point > 0) {
            return 'Love-' . $this->lookup[$this->p2Point];
        }

    }

    public function player1WinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p1Point++;
        }
    }

    public function player2WinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p2Point++;
        }
    }
}