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

        if ($this->isSamePoint()) {
            return $this->samePointScore();
        }

        if ($this->hasPlayerWin4Point()) {
            return $this->advPlayer() . ' Adv';
        }

        if ($this->p1Point > 0 || $this->p2Point > 0) {
            return $this->player1Score() . '-' . $this->player2Score();
        }

    }

    private function advPlayer()
    {
        return ($this->p1Point > $this->p2Point)
            ? 'Player1'
            : 'Player2';
    }

    private function hasPlayerWin4Point()
    {
        return ($this->p1Point == 4 || $this->p2Point == 4);
    }

    private function samePointScore()
    {
        if ($this->p1Point < 3) {
            return $this->player1Score() . '-All';
        }

        if ($this->p2Point >= 3) {
            return 'Deuce';
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