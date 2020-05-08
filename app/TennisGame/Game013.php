<?php
namespace App\TennisGame;

class Game013
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
        if ($this->p1Point > 0) {
            return $this->lookup[$this->p1Point] . '-Love';
        }

        if ($this->p2Point == 1) {
            return 'Love-Fifteen';
        }

        if ($this->p2Point == 2) {
            return 'Love-Thirty';
        }

        return 'Love-All';
    }

    public function player1WinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->p1Point++;
        }
    }

    public function player2WinPoint($point = 1)
    {
        for ($i = 0; $i < $point; $i++) {
            $this->p2Point++;
        }
    }

}