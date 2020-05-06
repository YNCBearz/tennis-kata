<?php
namespace App\TennisGame;

class Game011
{
    private $p1Point = 0;

    private $p2Point = 0;

    private $lookup = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty'
    ];

    public function score()
    {
        if ($this->p1Point > 0 || $this->p2Point > 0) {
            return $this->lookup[$this->p1Point] . '-' . $this->lookup[$this->p2Point];
        }

        return 'Love-All';
    }

    public function player1WinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p1Point++;
        }
    }

    public function player2WinPoint()
    {
        $this->p2Point++;
    }

}