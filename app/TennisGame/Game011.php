<?php
namespace App\TennisGame;

class Game011
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

        if ($this->isSamePoint() && $this->p1Point < 3) {
            return $this->player1Score() . '-All';
        }

        if ($this->isSamePoint() && $this->p2Point >= 3) {
            return 'Deuce';
        }

        if ($this->p1Point == 4 && $this->p1Point > $this->p2Point) {
            return 'Player1 Adv';
        }

        if ($this->p2Point == 4 && $this->p2Point > $this->p1Point) {
            return 'Player2 Adv';
        }

        if ($this->p1Point > 0 || $this->p2Point > 0) {
            return $this->player1Score() . '-' . $this->player2Score();
        }


    }

    private function isSamePoint()
    {
        return ($this->p1Point == $this->p2Point);
    }

    private function player1Score()
    {
        return $this->lookup[$this->p1Point];
    }

    private function player2Score()
    {
        return $this->lookup[$this->p2Point];
    }

    public function player1WinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p1Point++;
        }
    }

    public function player2WinPoint($point = 1)
    {
        for ($i = 1; $i <= $point; $i++) {
            $this->p2Point++;
        }
    }

}