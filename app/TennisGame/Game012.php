<?php
namespace App\TennisGame;

class Game012
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
        if ($this->isSamePoint()) {
            return $this->translatePlayer1Point() . '-All';
        }

        if ($this->isOver4Point()) {
            return $this->advScore();
        }

        if ($this->p1Point > 0 || $this->p2Point > 0) {
            return $this->normalScore();
        }
    }

    private function advScore()
    {
        if (abs($this->p1Point - $this->p2Point) == 1) {
            return $this->advPlayer() . ' Adv';
        }

        return $this->advPlayer() . ' Win';
    }

    private function isOver4Point()
    {
        return ($this->p1Point >= 4 || $this->p2Point >= 4);
    }

    private function advPlayer()
    {
        return ($this->p1Point > $this->p2Point)
            ? 'Player1'
            : 'Player2';
    }

    private function isSamePoint()
    {
        return ($this->p1Point == $this->p2Point);
    }

    private function normalScore()
    {
        return $this->translatePlayer1Point() . '-' . $this->translatePlayer2Point();
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