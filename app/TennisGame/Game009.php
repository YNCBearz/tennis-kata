<?php
namespace App\TennisGame;

class Game009
{
    private $p1Point = 0;

    private $p2Point = 0;

    private $lookUp = [
        0 => 'Love',
        1 => 'Fifteen',
        2 => 'Thirty',
        3 => 'Forty'
    ];

    public function score()
    {
        if ($this->isSamePoint()) {
            return $this->sameScore();
        }

        if ($this->isGameSet()) {
            return $this->advScore();
        }

        if ($this->p1Point > 0 || $this->p2Point > 0) {
            return $this->normalScore();
        }
    }

    private function normalScore()
    {
        return $this->lookUp[$this->p1Point] . '-' . $this->lookUp[$this->p2Point];
    }

    private function advScore()
    {
        return ($this->pointDiff() == 1)
            ? $this->advPlayer() . ' Adv'
            : $this->advPlayer() . ' Win';
    }

    private function pointDiff()
    {
        return abs($this->p1Point - $this->p2Point);
    }

    private function advPlayer()
    {
        return ($this->p1Point > $this->p2Point)
            ? 'Player1'
            : 'Player2';
    }

    private function isGameSet()
    {
        return ($this->p1Point >= 4 || $this->p2Point >= 4);
    }

    private function isOver3Point()
    {
        return ($this->p1Point >= 3 || $this->p2Point >= 3);
    }

    private function isSamePoint()
    {
        return ($this->p1Point == $this->p2Point);
    }

    private function sameScore()
    {
        return $this->isOver3Point()
            ? 'Deuce'
            : $this->lookUp[$this->p1Point] . '-All';
    }

    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p1Point++;
        }
    }

    public function secondPlayerWinPoint($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->p2Point++;
        }
    }
}