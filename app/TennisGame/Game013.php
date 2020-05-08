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
        if ($this->p1Point == $this->p2Point) {
            return $this->translatePlayer1Point() . '-All';
        }

        if ($this->p1Point > 0 || $this->p2Point > 0) {
            return $this->translatePlayer1Point() . '-' . $this->translatePlayer2Point();
        }

    }

    private function translatePlayer1Point()
    {
        return $this->lookup[$this->p1Point];
    }

    private function translatePlayer2Point()
    {
        return $this->lookup[$this->p2Point];
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