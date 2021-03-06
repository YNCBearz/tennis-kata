<?php
namespace App\TennisGame;

class Game007
{
    private $firstPlayerPoint = 0;

    private $secondPlayerPoint = 0;

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

        if ($this->isOver3Point()) {
            return $this->advScore();
        }

        return $this->normalScore();
    }

    private function isGameSet()
    {
        return abs($this->firstPlayerPoint - $this->secondPlayerPoint) >= 2;
    }

    private function advScore()
    {
        return ($this->isGameSet())
            ? $this->advPlayer() . ' Win'
            : $this->advPlayer() . ' Adv';
    }

    private function advPlayer()
    {
        return ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? 'FirstPlayer'
            : 'SecondPlayer';
    }

    private function isOver3Point()
    {
        return ($this->firstPlayerPoint > 3 || $this->secondPlayerPoint > 3);
    }

    private function normalScore()
    {
        return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
    }

    private function isSamePoint()
    {
        return ($this->firstPlayerPoint == $this->secondPlayerPoint);
    }

    private function samePointScore()
    {
        if ($this->firstPlayerPoint >= 3) {
            return $this->deuceScore();
        }

        return $this->lookup[$this->firstPlayerPoint] . '-All';
    }

    private function deuceScore()
    {
        return 'Deuce';
    }

    public function firstPlayerWinPoints($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoints($point = 1)
    {
        for ($i = 1 ; $i <= $point ; $i++) {
            $this->secondPlayerPoint++;
        }
    }
}