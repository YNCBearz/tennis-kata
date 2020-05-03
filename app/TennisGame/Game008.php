<?php
namespace App\TennisGame;

class Game008
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
            return $this->sameScore();
        }

        if ($this->firstPlayerPoint > 0 || $this->secondPlayerPoint > 0) {
            if ($this->isOver4Point() && abs($this->firstPlayerPoint - $this->secondPlayerPoint) == 1) {
                return $this->advPlayer() . ' Adv';
            } else if ($this->isOver4Point()) {
                return $this->advPlayer() . ' Win';
            }

            return $this->lookup[$this->firstPlayerPoint] . '-' . $this->lookup[$this->secondPlayerPoint];
        }

    }

    private function isOver4Point()
    {
        return ($this->firstPlayerPoint >= 4 || $this->secondPlayerPoint >= 4);
    }

    private function advPlayer()
    {
        return ($this->firstPlayerPoint > $this->secondPlayerPoint)
            ? 'FirstPlayer'
            : 'SecondPlayer';
    }

    private function sameScore()
    {
        return ($this->firstPlayerPoint >= 3)
            ? 'Deuce'
            : $this->lookup[$this->firstPlayerPoint] . '-All';
    }

    private function isSamePoint()
    {
        return ($this->firstPlayerPoint == $this->secondPlayerPoint);
    }

    public function firstPlayerWinPoint($point = 1)
    {
        for ($i = 1; $i <= $point ; $i++) {
            $this->firstPlayerPoint++;
        }
    }

    public function secondPlayerWinPoint($point = 1)
    {
        for ($i = 1; $i <= $point ; $i++) {
            $this->secondPlayerPoint++;
        }
    }
}